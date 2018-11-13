<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Models\Reserve;

class ReserveController extends Controller
{
    public function create()
    {
        return view("reserves.create");
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $rules = [
            "date" => "required",
            "store" => "required"
        ];
        $messages = [
            "date.required" => "入居日を入力してください",
            "store.required" => "店舗を選択してください",
            "agree.required" => "利用規約に同意してください"
        ];

        $validator = Validator::make($inputs, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $reserve = new Reserve();
            $form = [
                "date" => $request->input("date"),
                "store_id" => $request->input("store"),
            ];
            $user->fill($form);

            if ($user->save()) {
                return view("thanks", compact("user"));
            } else {
                return back()->withinput();
            }
            Session::put("user", $user->id);
            return view("agreement");
        }
    }
}
