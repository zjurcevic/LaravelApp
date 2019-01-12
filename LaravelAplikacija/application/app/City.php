<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['city_name', 'country_id'];

    public function country()
    {
        return $this->belongsTo(\App\Country::class);
    }

    public function persons()
    {
        return $this->hasMany(\App\Person::class);
    }

    public function banks()
    {
        return $this->belongsToMany(\App\City::class);
    }
}
