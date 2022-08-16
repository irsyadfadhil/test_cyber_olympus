<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('order_id');
            $table->double('price');
            $table->double('price_agent');
            $table->integer('qty');
            $table->double('total_price');
            $table->timestamps();
            // CREATE TABLE `order_detail` (
            //     `id` int(11) NOT NULL,
            //     `product_id` int(11) DEFAULT NULL,
            //     `order_id` int(11) DEFAULT NULL,
            //     `price` double DEFAULT NULL,
            //     `price_agent` double DEFAULT NULL,
            //     `qty` int(11) DEFAULT NULL,
            //     `total_price` double DEFAULT NULL
            //   ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
