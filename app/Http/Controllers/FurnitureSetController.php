<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\FurnitureSet;

class FurnitureSetController extends Controller
{
    public function show(Request $request, Int $id)
    {
        $set = FurnitureSet::find($id);
        return view("furniture_sets.show", compact("set"));
    }
}
