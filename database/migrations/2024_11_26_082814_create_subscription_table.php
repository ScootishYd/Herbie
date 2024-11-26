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
        Schema::create('subscription', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('id_user');
            $table->enum('jenis_langganan', ['free', 'premium', 'custom']);
            $table->integer('harga');
            $table->timestamp('tgl_mulai');
            $table->timestamp('tgl_akhir');
            $table->enum('status_pembayaran', ['belum dibayar', 'sudah dibayar']);
            $table->enum('metode_pembayaran', ['kartu kredit', 'transfer bank', 'qris', 'gerai']);
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription');
    }
};
