<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FurnitureSetController extends Controller
{
    public function show($id)
    {
        $set = FuenitureSet::find($id);
        return view("furniture_sets.show", compact("set"));
    }
}
