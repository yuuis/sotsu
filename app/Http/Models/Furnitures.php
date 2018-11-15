<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Furnitures extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Http\Models\FurnitureCategory');
    }

    public function sets()
    {
        return $this->belongsToMany('App\Http\Models\FurnitureSet');
    }

    public function images()
    {
        return $this->hasMany('App\Http\Models\FurnitureImage');
    }
}
