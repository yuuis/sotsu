<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class FurnitureImage extends Model
{
    public function furniture()
    {
        return $this->belongsTo('App\Http\Models\Furniture');
    }
}
