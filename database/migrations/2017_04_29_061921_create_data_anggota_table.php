<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_anggotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',25);
            $table->date('tanggal_lahir');
            $table->string('kelamin',10);
            $table->string('no_hp',12);
            $table->string('alamat',30);
            $table->integer('data_cv_id');
            $table->string('no_rekening',20);
            $table->rememberToken();
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
        Schema::drop('data_anggotas');
    }
}
