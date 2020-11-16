<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('tgl_transaksi');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kurir');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('no_tlp');
            $table->string('email');
            $table->string('barang');
            $table->longText('notes')->nullable();
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
