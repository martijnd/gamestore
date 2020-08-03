<?php

use Illuminate\Database\Seeder;
use Seeders\GameSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(GameSeeder::class);
    }
}
