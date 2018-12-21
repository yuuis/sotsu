<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Models\Reserve;
use App\Http\Models\User;
use App\Http\Models\Store;
use Illuminate\Support\Facades\Session;

class ReserveController extends Controller
{
    public function create()
    {
        $stores = Store::all();
        return view("reserves.create", compact('stores'));
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $rules = [
            "room_id" => "required",
            "store_id" => "required",
            "furniture_set_id" => "required",
            "enter_date" => "required",
            "visit_datetime" => "required",
            "confirm" => "required"
        ];
        $messages = [
            "room_id.required" => "room not specificated",
            "store_id.required" => "店舗を選択してください",
            "furniture_set_id.required" => "set not specificated",
            "enter_date.required" => "入居日を入力してください",
            "visit_datetime.required" => "来店日時を入力してください",
            "confirm.required" => "利用規約に同意してください"
        ];

        $validator = Validator::make($inputs, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $reserve = new Reserve();
            $form = [
                "user_id" => Session::get("user_id") || 1,
                "room_id" => $request->input("room_id"),
                "store_id" => $request->input("store_id"),
                "furniture_set_id" => $request->input("furniture_set_id"),
                "enter_date" => $request->input("enter_date"),
                "visit_datetime" => $request->input("visit_datetime"),
            ];
            $reserve->fill($form);
            if ($reserve->save()) {
                return view("thanks", compact("user"));
            } else {
                return back()->withinput();
            }
        }
    }
}
