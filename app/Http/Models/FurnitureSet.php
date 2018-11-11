<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class FurnitureSet extends Model
{
    public function furnitures()
    {
        return $this->belongsToMany('App\Http\Models\Furniture');
    }
}
