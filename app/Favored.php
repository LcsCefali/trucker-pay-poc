<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favored extends Model
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
        'isTruckPay'
    ];
}