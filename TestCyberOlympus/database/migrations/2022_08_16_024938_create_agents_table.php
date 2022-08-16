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

            // `id` int(11) NOT NULL,
            // `store_name` varchar(255) DEFAULT NULL,
            // `partner_id` varchar(50) DEFAULT NULL,
            // `pin_lock` varchar(8) DEFAULT NULL,
            // `store_open` time DEFAULT NULL,
            // `store_close` time DEFAULT NULL,
            // `address` varchar(500) DEFAULT NULL,
            // `kelurahan` varchar(255) DEFAULT NULL,
            // `kecamatan` varchar(255) DEFAULT NULL,
            // `kota` varchar(255) DEFAULT NULL,
            // `provinsi` varchar(255) DEFAULT NULL,
            // `kode_pos` varchar(10) DEFAULT NULL,
            // `latitude` varchar(100) DEFAULT NULL,
            // `longitude` varchar(100) DEFAULT NULL,
            // `ktp` varchar(255) DEFAULT NULL,
            // `kk` varchar(255) DEFAULT NULL,
            // `npwp` varchar(255) DEFAULT NULL,
            // `no_rekening` varchar(255) DEFAULT NULL,
            // `buku_rekening` varchar(355) DEFAULT NULL,
            // `point` int(11) DEFAULT NULL,
            // `credit_limit` double DEFAULT NULL,
            // `subscription` varchar(255) DEFAULT NULL,
            // `max_load` int(11) DEFAULT NULL,
            // `default_agent` int(11) DEFAULT 0
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
