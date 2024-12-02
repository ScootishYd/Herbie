<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // ID sesi
            $table->unsignedBigInteger('user_id')->nullable(); // Opsional, ID pengguna
            $table->string('ip_address', 45)->nullable(); // Alamat IP
            $table->text('user_agent')->nullable(); // Informasi browser
            $table->text('payload'); // Data sesi
            $table->integer('last_activity'); // Timestamp aktivitas terakhir

            $table->index('user_id'); // Index untuk user_id
            $table->index('last_activity'); // Index untuk last_activity
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
};
