<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_num');//订单号
            $table->bigInteger('add_flow');// 添加的流量
            $table->float('amount', 8, 2);//金额
            $table->string('payment_method',10);// 支付方式
            $table->string('note', 50);//备注
//            $table->integer('fenzu');//分组
            $table->integer('state');//状态
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
        Schema::dropIfExists('orders');
    }
}
