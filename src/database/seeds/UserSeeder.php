<?php

namespace Seeders;

use App\Models\User;
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
        User::factory()->create([
            'name' => 'Martijn Dorsman',
            'email' => 'martijn.dorsman@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory()->count(100)->create();
    }
}
