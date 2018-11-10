<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    public function room()
    {
        return $this->belongsTo('App\Http\Models\Room');
    }
}
