<?php

use App\Models\User;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
use function Tests\jsonHeaders;

it('should return /login', function() {
   get('/api/games')
    ->assertRedirect('login');
});

it('should not redirect when json header is set', function () {
    get('/api/games', jsonHeaders())
        ->assertUnauthorized();
});

it('should redirect to home if authenticated', function () {
  actingAs(User::factory()->create());
    get('/login')
        ->assertRedirect('/');
});

it('should not redirect an unauthenticated user', function() {
    get('/login')
        ->assertOk();
});

