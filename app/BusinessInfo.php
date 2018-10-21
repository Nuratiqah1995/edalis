<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessInfo extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
