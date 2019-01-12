<?php

use Illuminate\Database\Seeder;
use App\BankCity;

class bank_cityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BankCity::create([
            'address' => 'Adresa 123123 ',
            'city_id' => 1,
            'bank_id' => 1
        ]);
    }
}
