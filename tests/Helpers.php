<?php

namespace Tests;

use App\Models\User;
use Laravel\Sanctum\Sanctum;
use function Pest\Laravel\actingAs;

/**
 * @return User|\Illuminate\Contracts\Auth\Authenticatable|\Laravel\Sanctum\HasApiTokens
 */
function authenticateWithSanctum()
{
    return Sanctum::actingAs(
        User::factory()->create(),
        ['*']
    );
}

function login()
{
    return actingAs(User::factory()->create());
}

function jsonHeaders() {
    return ['Accept' => 'application/json', 'Content-Type' => 'application/json'];
}
