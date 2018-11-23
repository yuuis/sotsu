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
            "purchase_price" => 20000,
            "rental_price" => 1200,
            "furniture_category_id" => 1
        ]);
        DB::table("furnitures")->insert([
            "name" => "ブラックチェア",
            "purchase_price" => 5000,
            "rental_price" => 300,
            "furniture_category_id" => 2
        ]);
        DB::table("furnitures")->insert([
            "name" => "ホワイトデスク",
            "purchase_price" => 10000,
            "rental_price" => 560,
            "furniture_category_id" => 3
        ]);
        DB::table("furnitures")->insert([
            "name" => "シンプルソファ",
            "purchase_price" => 10000,
            "rental_price" => 560,
            "furniture_category_id" => 4
        ]);
        DB::table("furnitures")->insert([
            "name" => "丸いテーブル",
            "purchase_price" => 3000,
            "rental_price" => 170,
            "furniture_category_id" => 5
        ]);
        DB::table("furnitures")->insert([
            "name" => "T社製冷蔵庫",
            "purchase_price" => 10000,
            "rental_price" => 560,
            "furniture_category_id" => 6
        ]);
        DB::table("furnitures")->insert([
            "name" => "T社製電子レンジ",
            "purchase_price" => 4000,
            "rental_price" => 230,
            "furniture_category_id" => 7
        ]);
        DB::table("furnitures")->insert([
            "name" => "T社製洗濯機",
            "purchase_price" => 20000,
            "rental_price" => 1200,
            "furniture_category_id" => 8
        ]);
    }
}
