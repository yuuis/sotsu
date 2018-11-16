<?php

use Illuminate\Database\Seeder;

class FurnitureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("furnitures")->insert([
            "name" => "スタンダードベッド",
            "price" => 20000,
            "furniture_category_id" => 1
        ]);
        DB::table("furnitures")->insert([
            "name" => "ブラックチェア",
            "price" => 5000,
            "furniture_category_id" => 2
        ]);
        DB::table("furnitures")->insert([
            "name" => "ホワイトデスク",
            "price" => 10000,
            "furniture_category_id" => 3
        ]);
        DB::table("furnitures")->insert([
            "name" => "シンプルソファ",
            "price" => 10000,
            "furniture_category_id" => 4
        ]);
        DB::table("furnitures")->insert([
            "name" => "丸いテーブル",
            "price" => 3000,
            "furniture_category_id" => 5
        ]);
        DB::table("furnitures")->insert([
            "name" => "T社製冷蔵庫",
            "price" => 10000,
            "furniture_category_id" => 6
        ]);
        DB::table("furnitures")->insert([
            "name" => "T社製電子レンジ",
            "price" => 4000,
            "furniture_category_id" => 7
        ]);
        DB::table("furnitures")->insert([
            "name" => "T社製洗濯機",
            "price" => 20000,
            "furniture_category_id" => 8
        ]);
    }
}
