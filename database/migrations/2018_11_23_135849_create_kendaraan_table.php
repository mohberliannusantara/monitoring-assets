<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKendaraanTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('kendaraan', function (Blueprint $table) {
      $table->increments('id_kendaraan');
      $table->string('nama_kendaraan');
      $table->string('nomor_polisi');
      $table->string('pengguna');
      $table->integer('id_rayon')->unsigned();
      $table->integer('id_jenis_kendaraan')->unsigned();
      $table->integer('stan_awal');
      $table->integer('stan_akhir');
      $table->string('gambar');
      $table->string('keterangan');
      $table->integer('id_pemilik_kendaraan')->unsigned();
      $table->timestamps();

      $table->foreign('id_rayon')->references('id_rayon')->on('rayon')->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('id_jenis_kendaraan')->references('id_jenis_kendaraan')->on('jenis_kendaraan')->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('id_pemilik_kendaraan')->references('id_pemilik_kendaraan')->on('pemilik_kendaraan')->onUpdate('cascade')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('kendaraan');
  }
}
