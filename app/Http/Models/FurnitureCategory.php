<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class FurnitureCategory extends Model
{
    public function furnitures()
    {
        return $this->hasMany('App\Http\Models\Furniture');
    }
}
