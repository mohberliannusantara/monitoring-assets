<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properti', function (Blueprint $table) {
            $table->increments('id_properti');
            $table->string('nama_properti', 100);
            $table->text('alamat');
            $table->string('kecamatan');
            $table->integer('id_rayon')->unsigned();
            $table->string('kode_pos', 10);
            $table->text('gambar');
            $table->text('keterangan');
            $table->float('latitude');
            $table->float('longitude');
            // $table->timestamps('deleted_at')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('properti');
    }
}
