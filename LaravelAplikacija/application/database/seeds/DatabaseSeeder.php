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
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(AccountsTableSeeder::class);
        $this->call(ContinentsTableSeeder::class);
    }
}
