<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function companies()
    {
        return $this->belongsToMany('App\Http\Models\Company');
    }

    public function images()
    {
        return $this->hasMany('App\Http\Models\RoomImage');
    }

    public function furnitureSets()
    {
        return $this->hasMany('App\Http\Models\FurnitureSet');
    }
}
