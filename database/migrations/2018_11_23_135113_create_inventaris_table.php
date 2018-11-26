<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->increments('id_inventaris');
            $table->string('nama_inventaris');
            $table->string('merk');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->string('keterangan');
            $table->string('gambar');
            $table->integer('id_jenis_inventaris')->unsigned();
            $table->integer('id_ruang')->unsigned();
            $table->integer('id_rayon')->unsigned();
            $table->timestamps();

            $table->foreign('id_jenis_inventaris')->references('id_jenis_inventaris')->on('jenis_inventaris')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_ruang')->references('id_ruang')->on('ruang')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_rayon')->references('id_rayon')->on('rayon')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
}
