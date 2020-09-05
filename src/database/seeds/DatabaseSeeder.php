<?php

use Illuminate\Database\Seeder;
use Seeders\CompanySeeder;
use Seeders\GameSeeder;
use Seeders\GenreSeeder;
use Seeders\PublisherSeeder;
use Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(PublisherSeeder::class);
        $this->call(GameSeeder::class);
    }
}
