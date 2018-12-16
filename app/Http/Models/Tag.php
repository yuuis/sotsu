<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tags")->insert([
            "name" => "ベッド"
        ]);
        DB::table("tags")->insert([
            "name" => "チェア"
        ]);
        DB::table("tags")->insert([
            "name" => "デスク"
        ]);
        DB::table("tags")->insert([
            "name" => "ソファ"
        ]);
        DB::table("tags")->insert([
            "name" => "テーブル"
        ]);
        DB::table("tags")->insert([
            "name" => "冷蔵庫"
        ]);
        DB::table("tags")->insert([
            "name" => "レンジ"
        ]);
        DB::table("tags")->insert([
            "name" => "洗濯機"
        ]);
    }
}
