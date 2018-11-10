<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Http\Models\User');
    }

    public function room()
    {
        return $this->belongsTo('App\Http\Models\Room');
    }

    public function store()
    {
        return $this->belongsTo('App\Http\Models\Store');
    }
}
