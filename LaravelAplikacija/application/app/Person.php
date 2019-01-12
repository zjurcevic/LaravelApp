<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['person_oib', 'person_firstName', 'person_lastName', 'person_sex', 'person_dob', 'person_telephone', 'person_email', 'person_address', 'city_id'];

    public function accounts()
    {
        return $this->hasMany(\App\Account::class);
    }

    public function city()
    {
        return $this->belongsTo(\App\City::class);
    }

}
