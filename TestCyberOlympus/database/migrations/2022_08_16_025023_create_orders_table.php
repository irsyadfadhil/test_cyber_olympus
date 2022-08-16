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

            // `id` int(11) NOT NULL,
            // `invoice_id` varchar(50) DEFAULT NULL,
            // `customer_id` int(11) DEFAULT NULL,
            // `name` varchar(255) DEFAULT NULL,
            // `phone` varchar(50) DEFAULT NULL,
            // `address` varchar(500) DEFAULT NULL,
            // `kelurahan` varchar(255) DEFAULT NULL,
            // `kecamatan` varchar(255) DEFAULT NULL,
            // `kota` varchar(255) DEFAULT NULL,
            // `provinsi` varchar(255) DEFAULT NULL,
            // `kode_pos` varchar(10) DEFAULT NULL,
            // `latitude` varchar(100) DEFAULT NULL,
            // `longitude` varchar(100) DEFAULT NULL,
            // `agent_id` int(11) DEFAULT NULL,
            // `agent_name` varchar(255) DEFAULT NULL,
            // `payment_method` varchar(255) DEFAULT NULL,
            // `payment_link` varchar(255) DEFAULT NULL,
            // `payment_date` datetime DEFAULT NULL,
            // `buy_by` varchar(100) DEFAULT NULL,
            // `payment_total` double DEFAULT NULL,
            // `coupon_id` int(11) DEFAULT NULL,
            // `payment_discount_code` varchar(30) DEFAULT NULL,
            // `payment_discount` double DEFAULT NULL,
            // `payment_final` double DEFAULT NULL,
            // `order_weight` float DEFAULT NULL,
            // `order_distance` float DEFAULT 0,
            // `delivery_status` int(11) DEFAULT NULL,
            // `delivery_fee` double DEFAULT NULL,
            // `delivery_track` varchar(255) DEFAULT NULL,
            // `delivery_time` varchar(100) DEFAULT NULL,
            // `delivery_date` varchar(50) DEFAULT NULL,
            // `order_time` datetime DEFAULT NULL,
            // `status` varchar(10) DEFAULT NULL
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
