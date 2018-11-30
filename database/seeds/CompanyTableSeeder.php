<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
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
            "homepage" => "http://cat-hudosan.com",
            "phone_number" => "02022000022",
            "address" => "東京都渋谷区",
            "leader_name" => "necomura neco"
        ]);
        DB::table("compnay_roles")->insert([
            "company_id" => 1,
            "role" => 1
        ]);

        DB::table("companies")->insert([
            "name" => "ねこ家具屋",
            "homepage" => "http://cat-kagu.com",
            "phone_number" => "02022000022",
            "address" => "東京都渋谷区",
            "leader_name" => "necomura neco"
        ]);
        DB::table("compnay_roles")->insert([
            "company_id" => 2,
            "role" => 2
        ]);

        DB::table("companies")->insert([
            "name" => "ねこねこ引越し",
            "homepage" => "http://cat-hikkosi.com",
            "phone_number" => "02022000022",
            "address" => "東京都渋谷区",
            "leader_name" => "necomura neco"
        ]);
        DB::table("compnay_roles")->insert([
            "company_id" => 3,
            "role" => 3
        ]);

        DB::table("companies")->insert([
            "name" => "ねこ配送",
            "homepage" => "http://cat-haisou.com",
            "phone_number" => "02022000022",
            "address" => "東京都渋谷区",
            "leader_name" => "necomura neco"
        ]);
        DB::table("compnay_roles")->insert([
            "company_id" => 4,
            "role" => 4
        ]);

        DB::table("companies")->insert([
            "name" => "ねこ家具屋",
            "homepage" => "http://cat-kagusetting.com",
            "phone_number" => "02022000022",
            "address" => "東京都渋谷区",
            "leader_name" => "necomura neco"
        ]);
        DB::table("compnay_roles")->insert([
            "company_id" => 5,
            "role" => 5
        ]);
    }
}
