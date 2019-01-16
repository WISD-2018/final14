<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->increments('id');

            //建立資料欄位及型態
            //$table->unsignedInteger('user_id');
            $table->string('site_id');
            $table->string('user_class');
            $table->string('user_name');
            $table->string('user_phone');
            $table->string('req_date');
            $table->string('req_starttime');
            $table->string('req_endtime');
            $table->string('req_rentreason');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rents');
    }
}
