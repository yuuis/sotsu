<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('top');
});

Route::get("rooms/search", ["as" => "rooms.search", "uses" => "RoomController@search"]);
Route::resource("rooms", "RoomController", ["only" => ["index", "show"]]);
Route::resource("furnitures", "FurnitureController", ["only" => ["index", "show"]]);
Route::resource("reserves", "ReserveController", ["only" => ["create", "store"]]);

Route::resource("furniture_sets", "FurnitureSetContorller", ["only" => ["show"]]);