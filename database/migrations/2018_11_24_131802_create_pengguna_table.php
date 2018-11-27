<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->increments('id_pengguna');
            $table->string('nama_pengguna', 100);
            $table->string('username', 100);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('foto');
            $table->integer('id_level')->unsigned();
            $table->integer('id_rayon')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_level')->references('id_level')->on('level')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pengguna');
    }
}
