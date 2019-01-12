<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'person_oib' => '55334569743',
            'person_firstName' => 'Karlo',
            'person_lastName' => 'Majer',
            'person_sex' => 'm',
            'person_dob' => '1996-11-24',
            'person_telephone' => '0842395384',
            'person_email' => 'karlomajer@email.com',
            'person_address' => 'Adresa abcdefgh 63',
            'city_id' => 1
        ]);

        Person::create([
            'person_oib' => '00053239451',
            'person_firstName' => 'Test1',
            'person_lastName' => 'Testtest',
            'person_sex' => 'm',
            'person_dob' => '1995-12-08',
            'person_telephone' => '0832331000',
            'person_email' => 'tesd32523rf@gmail.com',
            'person_address' => 'dfsdh 7',
            'city_id' => 2
        ]);

        Person::create([
            'person_oib' => '39238423450',
            'person_firstName' => 'Test2',
            'person_lastName' => 'DSfsfdgd',
            'person_sex' => 'f',
            'person_dob' => '1936-01-04',
            'person_telephone' => '0832823004',
            'person_email' => 'sdfsdfwewsdf23@gmail.com',
            'person_address' => 'Dkfdskf skdfsidfjki 23',
            'city_id' => 1
        ]);
    }
}
