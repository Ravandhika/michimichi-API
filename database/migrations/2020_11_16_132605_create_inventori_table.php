<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventori', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('barang');
            $table->longText('deskripsi_barang');
            $table->enum('tipe', ['atasan', 'bawahan']);
            $table->enum('gender', ['laki_laki', 'perempuan']);
            $table->string('harga');
            $table->dateTime('tgl_update');
            $table->string('gambar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventori');
    }
}
