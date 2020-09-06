<?php

namespace Tests\Browser;

use App\Game;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginWorks()
    {
        $user = factory(User::class)->create([
            'email' => 'taylor@laravel.com',
            'password' => bcrypt('password')
        ]);

        factory(Game::class, 50)->create([
            'user_id' => $user->id
        ]);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/')
                ->assertPathIs('/login')
                ->type('email', $user->email)
                ->type('password', 'password')
                ->press('[type="submit"]')
                ->assertPathIs('/');
        });
    }
}
