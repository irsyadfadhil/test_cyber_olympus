<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->string('partner_id',50);
            $table->string('pin_lock',8);
            $table->time('store_open');
            $table->time('store_close');
            $table->string('address', 500);
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos', 10);
            $table->string('latitude', 100);
            $table->string('longitude', 100);
            $table->string('ktp');
            $table->string('npwp');
            $table->string('no_rekening');
            $table->string('buku_rekening', 355);
            $table->integer('point');
            $table->double('credit_limit');
            $table->string('subscription');
            $table->integer('max_load');
            $table->integer('default_agent');
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
        Schema::dropIfExists('agents');
    }
}
