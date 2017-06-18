<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penjualans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produk_id');
            $table->integer('jumlah_pesanan_id');
            $table->string('total_harga',10);
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
        Schema::drop('data_penjualans');
    }
}
