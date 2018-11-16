<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Models\User;

class UserController extends Controller
{
    public function create(Request $request)
    {
        return view("users.create", compact("request"));
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $rules = [
            "name" => "required|max:100",
            "email" => "required|max:1000|email",
            "phone" => "required",
            "gender" => "required"
        ];
        $messages = [
            "name.required" => "名前を入力してください",
            "email.required" => "メールアドレスを入力してください",
            "email.email" => "メールアドレスを正しく入力してください",
            "phone.required" => "電話番号を入力してください",
            "gender.required" => "性別を選択してください"
        ];

        $validator = Validator::make($inputs, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $user = new User();
            $form = [
                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "phone_number" => $request->input("phone"),
                "gender" => $request->input("gender")
            ];
            $user->fill($form);

            $datas['room_id'] = $request->room_id;
            $datas['furniture_set_id'] = $request->furniture_set_id;

            if ($user->save()) {
                return view("reserves.create", compact("user", "datas"));
            } else {
                return back()->withinput();
            }
        }
    }
}
