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
        Schema::create('identitas_uttp_jenis_c', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tera_jenis_b_id');
            $table->string("merek", 50)->nullable(false);
            $table->string("tipe", 50)->nullable(false);
            $table->string("nomor_seri", 50)->nullable(false);
            $table->string("debit_maksimal", 50)->nullable(false);
            $table->string("media", 50)->nullable(false);
            $table->integer("jumlah_nozzle", 50)->nullable(false)->autoIncrement(false);

            $table->foreign('tera_jenis_b_id')->references('id')->on('tera_jenis_b');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas_uttp_jenis_c');
    }
};
