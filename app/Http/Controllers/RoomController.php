<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view("rooms.index", compact("rooms"));
    }

    public function show(Int $id)
    {
        $room = Room::find($id);
        return view("rooms.show", compact("room"));
    }

    public function search(Request $request)
    {
        $prefecture = $request->input("prefecture") ? $request->input("prefecture") : "";
        $municipality = $request->input("municipality") ? $request->input("municipality") : "";
        $options = $request->input("search_options");
        $rooms = Room::search($prefecture, $municipality, $options);
        return view("rooms.search_index", compact("rooms"));
    }
}
