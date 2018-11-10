<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function rooms()
    {
        return $this->belongsToMany('App\Http\Models\Room');
    }

    public function stores()
    {
        return $this->hasMany('App\Http\Models\Store');
    }
}
