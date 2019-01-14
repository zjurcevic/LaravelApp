<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['country_name', 'country_code', 'continent_id'];

    public function cities()
    {
        return $this->hasMany(\App\City::class);
    }

    public function continent()
    {
        return $this->belongsTo(\App\Continent::class);
    }
}
