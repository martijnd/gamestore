<?php

namespace Tests;

use App\User;
use Laravel\Sanctum\Sanctum;
use function Pest\Laravel\actingAs;

/**
 * @return User|\Illuminate\Contracts\Auth\Authenticatable|\Laravel\Sanctum\HasApiTokens
 */
function authenticateWithSanctum()
{
    return Sanctum::actingAs(
        factory(User::class)->create(),
        ['*']
    );
}

function login()
{
    return actingAs(factory(User::class)->create());
}
