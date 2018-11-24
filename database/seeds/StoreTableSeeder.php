<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("stores")->insert([
            "name" => "やました不動産八王子支店",
            "address" => "東京都八王子市横川町",
            "open_time" => "10:30",
            "close_time" => "18:00",
            "open_day" => "月火木金土"
        ]);
        DB::table("stores")->insert([
            "name" => "れおな不動産八王子支店",
            "address" => "東京都八王子市横川町",
            "open_time" => "08:00",
            "close_time" => "23:30",
            "open_day" => "月火水木金"
        ]);
        DB::table("stores")->insert([
            "name" => "いしぐろ不動産八王子支店",
            "address" => "東京都八王子市横川町",
            "open_time" => "12:30",
            "close_time" => "20:30",
            "open_day" => "火水木"
        ]);
    }
}
