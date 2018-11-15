<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class FurnitureSet extends Model
{
    public function furnitures()
    {
        return $this->belongsToMany('App\Http\Models\Furniture');
    }

    public function fsfPath(Int $roomId)
    {
        return \DB::select("SELECT fsf_path FROM room_furniture_set WHERE room_id  = ? and furniture_set_id = ?", [$roomId, $this->id]);
    }
}
