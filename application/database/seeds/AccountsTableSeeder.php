<?php

use Illuminate\Database\Seeder;
use App\Account;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
            'account_number' => '1234523477',
            'account_iban' => 'HR2943238546349658663',
            'account_currency' => 'HRK',
            'account_type' => 'Tekuci',
            'account_limit' => 9999.99,
            'account_interest' => 0.01,
            'account_balance' => 6392.43,
            'account_openDate' => '2018-01-01',
            'person_id' => 1,
            'bank_id' => 1
        ]);

        Account::create([
            'account_number' => '4964382395',
            'account_iban' => 'HR1000695483459634593',
            'account_currency' => 'EUR',
            'account_type' => 'Devizni',
            'account_limit' => 9999.99,
            'account_interest' => 0.006,
            'account_balance' => 15392.95,
            'account_openDate' => '2017-05-08',
            'account_closeDate' => '2018-03-12',
            'person_id' => 2,
            'bank_id' => 1
        ]);

        Account::create([
            'account_number' => '7965969997',
            'account_iban' => 'HR9997995545645394004',
            'account_currency' => 'USD',
            'account_type' => 'Devizni',
            'account_limit' => 9999.99,
            'account_interest' => 0.006,
            'account_balance' => 5943925.25,
            'account_openDate' => '2018-10-26',
            'person_id' => 3,
            'bank_id' => 2
        ]);
    }
}
