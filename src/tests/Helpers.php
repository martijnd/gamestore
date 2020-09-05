<?php

namespace Tests;

use App\User;
use Laravel\Sanctum\Sanctum;

/**
 * @return User|\Illuminate\Contracts\Auth\Authenticatable|\Laravel\Sanctum\HasApiTokens
 */
function authenticate() {
    return Sanctum::actingAs(
        factory(User::class)->create(),
        ['*']
    );
}
