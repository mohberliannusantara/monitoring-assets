<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAksesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akses', function (Blueprint $table) {
            $table->increments('id_akses');
            $table->integer('id_modul')->unsigned();
            $table->integer('id_level')->unsigned();
            $table->timestamps();

            $table->foreign('id_modul')->references('id_modul')->on('modul')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_level')->references('id_level')->on('level')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akses');
    }
}
