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
        Schema::create('identitas_uttp_jenis_e', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tera_jenis_d_id');
            $table->string("merek", 50)->nullable(false);
            $table->string("tipe", 50)->nullable(false);
            $table->string("nomor_seri", 50)->nullable(false);
            $table->string("kapasitas", 50)->nullable(false);

            $table->foreign('tera_jenis_d_id')->references('id')->on('tera_jenis_d');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas_uttp_jenis_e');
    }
};
