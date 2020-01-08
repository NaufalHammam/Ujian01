<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventoris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('kondisi');
            $table->string('keterangan');
            $table->integer('jumlah');
            $table->string('id_jenis');
            $table->date('tanggal_register');
            $table->string('id_ruang');
            $table->string('kode_inventori');
            $table->string('id_petugas');
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
        Schema::dropIfExists('inventoris');
    }
}
