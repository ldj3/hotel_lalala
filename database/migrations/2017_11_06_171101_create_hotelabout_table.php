<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelaboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelabout', function (Blueprint $table) {
            $table->increments('id')->comment( '主键ID' );
            $table->string('data_confirm_str', 10)->comment('匹配状态');
            $table->unsignedInteger('hid');
            $table->tinyInteger('city')->comment('城市编码');
            $table->string('address', 120)->comment('酒店地址');
            $table->char('tel', 30)->comment('酒店电话');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotelabout');
    }
}
