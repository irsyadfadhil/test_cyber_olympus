<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('category');
            $table->string('type', 30);
            $table->string('item',30);
            $table->float('weight');
            $table->string('sku', 100);
            $table->double('price_sell');
            $table->double('price_promo');
            $table->double('price_agent');
            $table->string('photo', 300);
            $table->string('recommendation', 20);
            $table->text('description');
            $table->string('status', 10);
            $table->integer('ordering');
            $table->timestamps();
            // `id` int(11) NOT NULL,
            // `product_name` varchar(255) DEFAULT NULL,
            // `category` int(11) DEFAULT NULL,
            // `type` varchar(30) DEFAULT NULL,
            // `item` varchar(30) DEFAULT NULL,
            // `weight` float DEFAULT NULL,
            // `sku` varchar(100) DEFAULT NULL,
            // `price_sell` double DEFAULT NULL,
            // `price_promo` double DEFAULT NULL,
            // `price_agent` double DEFAULT NULL,
            // `photo` varchar(300) DEFAULT NULL,
            // `recommendation` varchar(20) DEFAULT NULL,
            // `description` text DEFAULT NULL,
            // `status` varchar(10) DEFAULT NULL,
            // `ordering` int(11) DEFAULT NULL
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
