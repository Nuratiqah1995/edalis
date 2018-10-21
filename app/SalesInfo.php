<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesInfo extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
