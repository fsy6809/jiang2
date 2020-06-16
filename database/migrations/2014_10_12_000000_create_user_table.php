<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');//name
            $table->string('email')->unique();//邮箱，唯一
            $table->string('password');//密码
            $table->string('token');//name
            $table->string('uuid');//uuid
            $table->Integer('t');//最后使用时间
            $table->bigInteger('u');//上传
            $table->bigInteger('d');//下载
            $table->bigInteger('transfer_enable');//已使用流量
            $table->Integer('enable');//启用状态
            $table->timestamp('email_verified_at')->nullable();//邮箱验证时间
            $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
}
