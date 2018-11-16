<?php

use Illuminate\Database\Seeder;

class FurnitureImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("furniture_images")->insert([
            "image_path" => "https://www.nitori-net.jp/wcsstore/ec/Static/category/Bed/ctg200X200/BedFrame_standard.jpg",
            "furnitures_id" => 1,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "https://images-na.ssl-images-amazon.com/images/I/51bZJMI3fkL._SY355_.jpg",
            "furnitures_id" => 2,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "https://ic4-a.wowma.net/mi/gr/114/image.rakuten.co.jp/rcmdin/cabinet/vd01/vd-st60v-1000.jpg",
            "furnitures_id" => 3,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "http://www.simplestyle.co.jp/img/tanpin/551883.jpg",
            "furnitures_id" => 4,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "http://www.lowtable.kagus.jp/mn/images/587576.jpg",
            "furnitures_id" => 5,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "https://image.biccamera.com/img/00000003731208_A01.jpg?sr.dw=600&sr.jqh=60&sr.dh=600&sr.mat=1",
            "furnitures_id" => 6,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "https://images-na.ssl-images-amazon.com/images/I/417Ez7TJaXL._SY355_.jpg",
            "furnitures_id" => 7,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "https://www.komeri.com/images/goods/014/009/49/1400949.jpg",
            "furnitures_id" => 8,
        ]);
    }
}
