<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('referral_id');
            $table->string('address', 500);
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos', 10);
            $table->string('latitude', 100);
            $table->string('longitude', 100);
            $table->string('no_rekening');
            $table->string('buku_rekening', 350);
            $table->integer('point');
            $table->integer('default_address');
            $table->timestamps();

            // `id` int(11) NOT NULL,
            // `referral_id` int(11) DEFAULT NULL,
            // `address` varchar(500) DEFAULT NULL,
            // `kelurahan` varchar(255) DEFAULT NULL,
            // `kecamatan` varchar(255) DEFAULT NULL,
            // `kota` varchar(255) DEFAULT NULL,
            // `provinsi` varchar(255) DEFAULT NULL,
            // `kode_pos` varchar(10) DEFAULT NULL,
            // `latitude` varchar(100) DEFAULT NULL,
            // `longitude` varchar(100) DEFAULT NULL,
            // `no_rekening` varchar(255) DEFAULT NULL,
            // `buku_rekening` varchar(355) DEFAULT NULL,
            // `point` int(11) DEFAULT NULL,
            // `default_address` int(11) DEFAULT NULL
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
