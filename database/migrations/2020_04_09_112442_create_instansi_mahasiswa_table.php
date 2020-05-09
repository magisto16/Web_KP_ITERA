<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstansiMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansi_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('instansi_id')->unsigned();
            $table->bigInteger('mahasiswa_id')->unsigned();
            $table->string('divisi',20)->nullable();
            $table->date('mulai')->nullable();
            $table->date('selesai')->nullable();
            $table->string('file_nilai')->nullable();
            $table->string('file_logsheet')->nullable();
            $table->integer('nilai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instansi_mahasiswa');
    }
}
