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
