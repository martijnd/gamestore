<?php

use App\Models\Game;
use App\Models\User;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\get;
use function Pest\Laravel\patch;
use function Pest\Laravel\post;

beforeEach(function () {
    actingAs(User::factory()->create());
});
it('returns the games list', function () {
    get('games')
        ->assertOk();
});

it('returns the create game page', function() {
    get('games/create')
        ->assertOk();
});

it('should store a new game', function () {
   post('games', Game::factory()->make()->toArray())
   ->assertRedirect('games');
});

it('should show a game page', function () {
    $game = Game::factory()->create();

    get("/games/{$game->id}")
    ->assertSee($game->name);
});

it('should update a game and show it on the page', function () {
    $game = Game::factory()->create();
    $testName = 'Test name';

    patch("/games/{$game->id}", ['name' => $testName])
        ->assertRedirect(route('games.show', ['game' => $game]));

    assertDatabaseHas('games', ['name' => $testName]);
});
