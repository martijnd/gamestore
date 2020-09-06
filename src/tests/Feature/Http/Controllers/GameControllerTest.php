<?php

use App\Game;
use App\User;
use Laravel\Sanctum\Sanctum;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;
use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\patchJson;
use function Pest\Laravel\postJson;
use function Tests\authenticateWithSanctum;

beforeEach(function () {
    $this->user = authenticateWithSanctum();
});

it('retrieves a list of games', function () {
    $response = getJson('/api/games')
        ->assertOk();
});

it('retrieves a single game', function () {
    $game = factory(Game::class)->create();
    getJson("/api/games/{$game->id}")
        ->assertOk();
});

it('stores a new game', function () {
    $game = factory(Game::class)->make()->toArray();
    postJson('/api/games', $game)
        ->assertCreated();

    assertDatabaseHas('games', [
        'name' => $game['name']
    ]);
});

it('validates the input', function () {
    $game = factory(Game::class)->make()->toArray();
    $game['name'] = 2;
    $game['rating'] = 101;

    postJson('/api/games', $game)
        ->assertJson(['message' => 'The given data was invalid.'])
        ->assertJsonValidationErrors([
            "name" => "The name must be a string.",
            'rating' => "The rating must be between 1 and 100."
        ]);
});

it('retrieves a newly created game', function () {
    // Create the game
    $game = factory(Game::class)->make();

    // Send it to the endpoint
    $response = postJson('/api/games', $game->toArray())
        ->assertCreated()
        ->decodeResponseJson();

    // Retrieve it again
    getJson('/api/games/' . $response['id'])
        ->assertOk();
});

it('updates a game', function () {
    // Create the game
    $game = factory(Game::class)->make();

    // Send it to the endpoint
    $response = postJson('/api/games', $game->toArray())
        ->assertCreated()
        ->decodeResponseJson();

    // Update the game
    $response['name'] = 'Updated name';
    patchJson('/api/games/' . $response['id'], $response)
        ->assertOk();
    // Check if it is changed
    $response = getJson('/api/games/' . $response['id'])
        ->assertOk();
    expect($response['name'])->toBe('Updated name');
});

it("prevents a user to delete another user's game", function () {
    // Create a user and his game
    $game = factory(game::class)->create(['user_id' => $this->user->id]);
    // Create another user
    $user2 = factory(User::class)->create();

    Sanctum::actingAs($user2);

    deleteJson('/api/games/'.$game->id)
    ->assertForbidden();
});

it('deletes a game', function () {
    // Create a user and his game
    $game = factory(game::class)->create(['user_id' => $this->user->id]);

    // Delete the game
    deleteJson('/api/games/'.$game->id)
        ->assertNoContent();

    assertDatabaseMissing('games', [
        'name' => $game->name
    ]);
});
