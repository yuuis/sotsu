<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = array("name", "email", "phone_number", "gender");
    public function reserves()
    {
        return $this->hasMany('App\Http\Models\Reserve');
    }

    public function gender(Int $gender)
    {
        switch($gender) {
            case 1: return "男";
            case 2: return "女";
            case 3: return "その他";
        }
    }
}
