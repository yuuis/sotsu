<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretateInitialSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 会社の基本情報
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('homepage');
            $table->string('phone_number');
            $table->string('address');
            $table->string('leader_name');
            $table->timestamps();
        });

        // 会社の役割
        // 1: 不動産, 2: 家具, 3: 引越し, 4: 配送, 5: 家具設置
        Schema::create('compnay_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->integer('role');
            $table->timestamps();
        });

        // 不動産会社の個別情報
        Schema::create('estate_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->timestamps();
        });

        // 不動産業者のview
        DB::statement('DROP VIEW IF EXISTS estate_companies');
        DB::statement("CREATE VIEW estate_companies AS SELECT companies.id, companies.name, companies.homepage, companies.phone_number, companies.address, companies.leader_name FROM companies INNER JOIN estate_items ON (companies.id = estate_items.company_id)");

        // 引越し業者の個別情報
        Schema::create('moving_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->timestamps();
        });

        // 引越し業者会社のview
        DB::statement('DROP VIEW IF EXISTS moving_companies');
        DB::statement("CREATE VIEW moving_companies AS SELECT companies.id, companies.name, companies.homepage, companies.phone_number, companies.address, companies.leader_name FROM companies INNER JOIN moving_items ON (companies.id = moving_items.company_id)");

        // 配送業者の個別情報
        Schema::create('deliver_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->timestamps();
        });

        // 配送業者会社のview
        DB::statement('DROP VIEW IF EXISTS deliver_companies');
        DB::statement("CREATE VIEW deliver_companies AS SELECT companies.id, companies.name, companies.homepage, companies.phone_number, companies.address, companies.leader_name FROM companies INNER JOIN deliver_items ON (companies.id = deliver_items.company_id)");

        // 家具業者の個別情報
        Schema::create('furniture_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->timestamps();
        });

        // 家具業者会社のview
        DB::statement('DROP VIEW IF EXISTS furniture_companies');
        DB::statement("CREATE VIEW furniture_companies AS SELECT companies.id, companies.name, companies.homepage, companies.phone_number, companies.address, companies.leader_name FROM companies INNER JOIN furniture_items ON (companies.id = furniture_items.company_id)");

        // 家具設置業者の個別情報
        Schema::create('furniture_setting_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->timestamps();
        });

        // 配送業者会社のview
        DB::statement('DROP VIEW IF EXISTS furniture_setting_companies');
        DB::statement("CREATE VIEW furniture_setting_companies AS SELECT companies.id, companies.name, companies.homepage, companies.phone_number, companies.address, companies.leader_name FROM companies INNER JOIN furniture_setting_items ON (companies.id = furniture_setting_items.company_id)");

        // 家具倉庫
        Schema::create('furniture_storehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->timestamps();
        });

        // 不動産と部屋の中間テーブル
        Schema::create('estate_company_room', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('company_id');
            $table->Integer('room_id');
            $table->timestamps();
        });

        // 部屋
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('floor_plan');
            $table->timestamps();
        });

        // 部屋の画像
        Schema::create('room_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_path');
            $table->integer('room_id');
            $table->timestamps();
        });

        // 不動産の店舗
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('open_time');
            $table->string('close_time');
            $table->string('open_day');
            $table->integer('company_id');
            $table->timestamps();
        });

        // 家具
        Schema::create('furnitures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('purchase_price');
            $table->integer('rental_price');
            $table->integer('furniture_category_id');
            $table->integer('height');
            $table->integer('width');
            $table->integer('length');
            $table->timestamps();
        });

        // 家具のカテゴリ
        Schema::create('furniture_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        // 家具の画像
        Schema::create('furniture_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_path');
            $table->integer('furnitures_id');
            $table->timestamps();
        });

        // 家具セット
        Schema::create('furniture_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        // 家具と家具セットの中間テーブル
        Schema::create('furniture_set_furnitures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('furnitures_id');
            $table->integer('furniture_set_id');
            $table->timestamps();
        });

        // 部屋と家具セットの中間テーブル
        Schema::create('room_furniture_set', function (Blueprint $table) {
            $table->increments('id');
            $table->string('room_id');
            $table->integer('furniture_set_id');
            $table->string('fsf_path');
            $table->timestamps();
        });

        // ユーザ
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('gender');
            $table->string('email');
            $table->string('phone_number');
            $table->string('credit_card');
            $table->string('expired_date');
            $table->timestamps();
        });

        // 予約
        Schema::create('reserves', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('user_id');
            $table->Integer('room_id');
            $table->Integer('store_id');
            $table->Integer('furniture_set_id');
            $table->date('enter_date');
            $table->datetime('visit_datetime');
            $table->timestamps();
        });

        // 部屋の属性タグ
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        // 部屋とタグの中間テーブル
        Schema::create('tag_furnitures', function(Blueprint $table) {
            $table->increments('id');
            $table->Integer('tag_id');
            $table->Integer('furniture_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
        Schema::dropIfExists('compnay_roles');
        Schema::dropIfExists('estate_items');
        DB::statement('DROP VIEW IF EXISTS estate_companies');
        Schema::dropIfExists('moving_items');
        DB::statement('DROP VIEW IF EXISTS moving_companies');
        Schema::dropIfExists('deliver_items');
        DB::statement('DROP VIEW IF EXISTS deliver_companies');
        Schema::dropIfExists('furniture_items');
        DB::statement('DROP VIEW IF EXISTS furniture_companies');
        Schema::dropIfExists('furniture_setting_items');
        DB::statement('DROP VIEW IF EXISTS furniture_setting_companies');
        Schema::dropIfExists('furniture_storehouses');
        Schema::dropIfExists('estate_company_room');
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('room_images');
        Schema::dropIfExists('stores');
        Schema::dropIfExists('furnitures');
        Schema::dropIfExists('furniture_categories');
        Schema::dropIfExists('furniture_images');
        Schema::dropIfExists('furniture_sets');
        Schema::dropIfExists('furniture_set_furnitures');
        Schema::dropIfExists('room_furniture_set');
        Schema::dropIfExists('users');
        Schema::dropIfExists('reserves');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('tag_furnitures');
    }
}
