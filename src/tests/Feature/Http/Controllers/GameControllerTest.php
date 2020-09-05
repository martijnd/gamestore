<?php

use App\Game;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Tests\authenticate;

beforeEach(function () {
   authenticate();
});

it('retrieves a list of games', function () {
    $response = getJson('/api/games')
        ->assertOk();
});

it('retrieves a single game', function() {
    $game = factory(Game::class)->create();
   $response = getJson("/api/games/{$game->id}")
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
