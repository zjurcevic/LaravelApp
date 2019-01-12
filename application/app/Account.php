<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['account_number', 'account_iban', 'account_currency', 'account_type', 'account_limit', 'account_interest', 'account_balance', 'account_openDate', 'account_closeDate', 'person_id', 'bank_id'];

    public function person()
    {
        return $this->belongsTo(\App\Person::class);
    }
    public function bank()
    {
        return $this->belongsTo(\App\Bank::class);
    }
}
