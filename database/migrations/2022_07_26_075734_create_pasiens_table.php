<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('nik')->unique()->nullable();
            $table->string('noka')->unique()->nullable();
            $table->string('no_rm')->unique()->nullable();
            $table->string('no_hp')->nullable();
            $table->string('nama')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('negara')->nullable();
            $table->string('alamat')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabkot')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('gender', ['L', 'P']);
            $table->string('agama')->nullable();
            $table->string('masa')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('suku')->nullable();
            $table->string('sapaan')->nullable();
            $table->string('cara_datang')->nullable();
            $table->smallInteger('jenis_pasien')->default(0)->comment('0:baru, 1:lama');
            $table->smallInteger('flag')->default(1)->comment('0:tidak aktif, 1:Aktif');
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
        Schema::dropIfExists('pasiens');
    }
}
