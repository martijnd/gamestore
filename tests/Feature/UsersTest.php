<?php

namespace Tests\Feature;

use App\User;
use function Pest\Laravel\get;

it('retrieves the user', function () {
    $user = factory(User::class)->create();

    get('api/users/'.$user->id)->assertOk();
});
