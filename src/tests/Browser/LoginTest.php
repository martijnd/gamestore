<?php

namespace Tests\Browser;

use App\Company;
use App\Game;
use App\Genre;
use App\Publisher;
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
            'email' => 'martijn.dorsman@gmail.com',
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
                ->click('@login-button')
                ->assertPathIs('/');
        });
    }

    public function testCanCreateAGame()
    {
        $user = factory(User::class)->create([
            'email' => 'martijn.dorsman@gmail.com',
            'password' => bcrypt('password')
        ]);

        factory(Game::class, 50)->create([
            'user_id' => $user->id
        ]);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/games')
                ->click('@create-game-button')
                ->type('name', 'Test game')
                ->select('genre_id')
                ->select('company_id')
                ->select('publisher_id')
                ->type('rating', 20)
                ->click('@save-new-game-button')
                ->assertPathIs('/games');
        });
    }
}
