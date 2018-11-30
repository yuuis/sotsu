<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("rooms")->insert([
            "name" => "八王子の家",
            "address" => "東京都八王子市横川町",
            "floor_plan" => "http://www.assetmake.co.jp/chintai/wordpress/wp-content/uploads/image4.jpg",
        ]);
        DB::table("room_images")->insert([
            "image_path" => "http://samidare.jp/tona/box/mitazonoisama.jpg",
            "room_id" => 1,
        ]);
        DB::table("rooms")->insert([
            "name" => "八王子のマンション",
            "address" => "東京都八王子市横川町",
            "floor_plan" => "https://amd.c.yimg.jp/amd/20150907-00000001-fuufumanzai-001-3-view.jpg"
        ]);
        DB::table("room_images")->insert([
            "image_path" => "http://suumo.jp/journal/wp/wp-content/uploads/2017/08/138396_main-400x250.jpg",
            "room_id" => 2,
        ]);
        DB::table("rooms")->insert([
            "name" => "八王子の高いマンション",
            "address" => "東京都八王子市横川町",
            "floor_plan" => "https://photo.roomhub.jp/v1/image/roomhubusercontent/297792796285508029.jpg"
        ]);
        DB::table("room_images")->insert([
            "image_path" => "http://biz-journal.jp/images/post_14976_haseko.jpg",
            "room_id" => 3
        ]);
    }
}
