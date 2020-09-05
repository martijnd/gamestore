<?php

namespace Seeders;

use App\Company;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Martijn Dorsman',
            'email' => 'martijn.dorsman@gmail.com',
            'password' => bcrypt('password')
        ]);

        factory(User::class, 100)->create();
    }
}
