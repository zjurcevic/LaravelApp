<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = ['bank_name', 'bank_oib'];

    public function accounts()
    {
        return $this->hasMany(\App\Account::class);
    }

    public function cities()
    {
        return $this->belongsToMany(\App\Bank::class);
    }
}
