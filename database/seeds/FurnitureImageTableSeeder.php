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

        DB::table("furniture_images")->insert([
            "image_path" => "https://shopping.c.yimg.jp/lib/stepone2008/m-0001616_1.jpg",
            "furnitures_id" => 9,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "https://rr.img.naver.jp/mig?src=http%3A%2F%2Fimgcc.naver.jp%2Fkaze%2Fmission%2FUSER%2F20150906%2F70%2F7475700%2F23%2F200x200x98e5d72fb418d88bfbce89f1.jpg%2F300%2F600&twidth=300&theight=600&qlt=80&res_format=jpg&op=r",
            "furnitures_id" => 10,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "https://askul.c.yimg.jp/img/product/3L1/9671187_3L1.jpg",
            "furnitures_id" => 11,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "http://www.livinghouse-store.jp/images/detailed/16/IMG_3198.jpg",
            "furnitures_id" => 12,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "https://i.pinimg.com/564x/62/fa/f4/62faf4cd196d5fc08ec13ab56259daa4.jpg",
            "furnitures_id" => 13,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "https://image.biccamera.com/img/00000003731208_A01.jpg?sr.dw=600&sr.jqh=60&sr.dh=600&sr.mat=1",
            "furnitures_id" => 14,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "https://images-na.ssl-images-amazon.com/images/I/417Ez7TJaXL._SY355_.jpg",
            "furnitures_id" => 15,
        ]);
        DB::table("furniture_images")->insert([
            "image_path" => "https://www.komeri.com/images/goods/014/009/49/1400949.jpg",
            "furnitures_id" => 16,
        ]);
    }
}
