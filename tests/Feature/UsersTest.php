<?php

namespace Tests\Feature;

use App\User;
use function Pest\Faker\faker;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

it('retrieves the user', function () {
    $user = factory(User::class)->create();

    get('api/users/'.$user->id)->assertOk();
});

it('stores the user', function() {
    $user = [
        'name' => faker()->name,
        'email' => faker()->email,
        'password'=> faker()->password
    ];

    post('/api/users', $user)
        ->assertStatus(201)
        ->assertJson([
            'name' => $user['name'],
            'email' => $user['email']
        ]);
});
