<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
        'bankCode',
        'bankName',
        'document',
        'name',
        'agency',
        'account',
        'accountType',
        'date',
        'value',
        'isTruckPay'
    ];
}
