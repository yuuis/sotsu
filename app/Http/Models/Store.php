<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Http\Models\Company');
    }
}
