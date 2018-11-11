<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function reserves()
    {
        return $this->hasMany('App\Http\Models\Reserve');
    }
}
