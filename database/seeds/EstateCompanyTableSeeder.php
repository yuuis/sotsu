<?php

use Illuminate\Database\Seeder;

class EstateCompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("companies")->insert([
            "name" => "ねこ不動産",
            "homepage" => "http://cat-hudosan.com"
        ]);
    }
}
