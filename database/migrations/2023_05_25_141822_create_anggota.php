<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('ID_siswa');
            $table->unique(array('ID_siswa'));
            $table->string('nama');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('kelas');
            $table->string('status');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
