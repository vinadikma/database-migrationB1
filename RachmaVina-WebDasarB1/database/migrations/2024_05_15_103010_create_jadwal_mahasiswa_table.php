<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_mahasiswa', function (Blueprint $table) {
            $table->unsignedBigInteger('npm');
            $table->foreign('npm')->references('id')->on('mahasiswa');
            $table->unsignedBigInteger('id_prodi');
            $table->foreign('id_prodi')->references('id')->on('prodi');
            $table->unsignedBigInteger('id_matakuliah');
            $table->foreign('id_matakuliah')->references('id')->on('matakuliah');
            $table->string('ruangan');
            $table->time('jam');
            $table->string('dosen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_mahasiswa');
    }
};
