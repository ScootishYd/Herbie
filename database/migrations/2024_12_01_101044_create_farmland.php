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
        Schema::create('farmland', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('pemilik');
            $table->string('nama_lahan');
            $table->string('lokasi');
            $table->string('luas');
            $table->string('foto');
            $table->date('tgl_mulai_tanam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmland');
    }
};
