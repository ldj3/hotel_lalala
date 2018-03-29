<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddhotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //添加酒店表
        Schema::create('addhotel', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('outer_id')->comment( '主键ID' );
            $table->string('name', 128)->comment('酒店名称');
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
        Schema::dropIfExists('addhotel');
    }
}
