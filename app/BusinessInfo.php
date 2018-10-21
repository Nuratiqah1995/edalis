<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessInfo extends Model
{

    public function address()
    {
        return $this->hasOne(Address::class,'entity_id')->where('type',4);
    }
}
