<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'city_name' => 'Zagreb',
            'country_id' => 1
        ]);

        City::create([
            'city_name' => 'Sisak',
            'country_id' => 1
        ]);

        City::create([
            'city_name' => 'Varazdin',
            'country_id' => 1
        ]);
    }
}
