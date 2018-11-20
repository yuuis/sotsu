<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = [
        'user_id', 'room_id', 'store_id', 'furniture_set_id', 'enter_date', 'visit_datetime'
    ];
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
