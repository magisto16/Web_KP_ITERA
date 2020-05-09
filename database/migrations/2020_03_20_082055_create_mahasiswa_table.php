<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('dosen_id')->unsigned()->nullable();
            $table->string('nim',8)->unique()->nullable();
            $table->year('tahun_masuk')->index()->unsigned()->nullable();
            $table->string('alamat',255)->nullable();
            $table->string('Kontak_Person',20)->nullable();
            $table->dateTime('selesai')->nullable();
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
        Schema::dropIfExists('mahasiswa');
    }
}
