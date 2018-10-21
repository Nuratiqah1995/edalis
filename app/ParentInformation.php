<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentInformation extends Model
{
    public function address()
    {
        return $this->hasOne(Address::class,'entity_id');
    }
}
