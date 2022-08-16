<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('invoice_id', 50);
            $table->integer('customer_id');
            $table->string('name');
            $table->string('phone', 50);
            $table->string('address', 500);
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos', 10);
            $table->string('latitude', 100);
            $table->string('longitude', 100);
            $table->integer('agent_id');
            $table->string('agent_name');
            $table->string('payment_method');
            $table->string('payment_link');
            $table->dateTime('payment_date');
            $table->string('buy_by', 100);
            $table->double('payment_total');
            $table->integer('coupon_id');
            $table->string('payment_discount_code', 30);
            $table->double('payment_discount');
            $table->double('payment_final');
            $table->float('order_weight');
            $table->float('order_distance');
            $table->integer('delivery_status');
            $table->double('delivery_fee');
            $table->string('delivery_track');
            $table->string('delivery_time', 100);
            $table->string('delivery_date', 50);
            $table->dateTime('order_time');
            $table->string('status', 10);
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
