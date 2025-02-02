<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(countriesSeeder::class);
        $this->call(userTableSeeder::class);
        $this->call(recruitmentTableSeeder::class);

    }
}
