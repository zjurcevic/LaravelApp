<?php

use Illuminate\Database\Seeder;
use App\Bank;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create([
            'bank_name' => 'Privredna Banka Zagreb',
            'bank_oib' => '12345673523',
        ]);

        Bank::create([
            'bank_name' => 'Hrvatska Postanska Banka',
            'bank_oib' => '33334562003',
        ]);

        Bank::create([
            'bank_name' => 'Sberbank',
            'bank_oib' => '11120304674',
        ]);
    }
}
