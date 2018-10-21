<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id', 'address_1', 'address_2','city', 'state', 'postcode'
    ];
}
