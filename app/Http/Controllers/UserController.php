<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view("users.create");
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
            "inputName.required" => "名前を入力してください",
            "inputEmail.required" => "メールアドレスを入力してください",
            "inputEmail.email" => "メールアドレスを正しく入力してください",
            "inputPhoneNumber.required" => "電話番号を入力してください",
            "gender" => "性別を入力してください"
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

            if ($user->save()) {
                return view("reserves.create", compact("user"));
            } else {
                return back()->withinput();
            }
        }
    }
}
