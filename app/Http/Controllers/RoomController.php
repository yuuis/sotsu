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
        $prefecture = $request->input("prefecture");
        $rejon = $request->input("rejon");
        $transportation = $request->input("transportation");
        $rooms = Room::search($prefecture, $rejon, $transportation);
        return view("rooms.search_index", compact("rooms"));
    }
}
