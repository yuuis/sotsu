<?php

use Illuminate\Database\Seeder;

class FurnitureCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("furniture_categories")->insert([
            "name" => "ベッド"
        ]);
        DB::table("furniture_categories")->insert([
            "name" => "チェア"
        ]);
        DB::table("furniture_categories")->insert([
            "name" => "デスク"
        ]);
        DB::table("furniture_categories")->insert([
            "name" => "ソファ"
        ]);
        DB::table("furniture_categories")->insert([
            "name" => "テーブル"
        ]);
        DB::table("furniture_categories")->insert([
            "name" => "冷蔵庫"
        ]);
        DB::table("furniture_categories")->insert([
            "name" => "レンジ"
        ]);
        DB::table("furniture_categories")->insert([
            "name" => "洗濯機"
        ]);
    }
}
