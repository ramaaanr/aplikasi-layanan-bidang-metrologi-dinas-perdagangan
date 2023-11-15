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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string("merek_kendaraan", 100)->nullable(false);
            $table->string("nomor_polisi", 100)->nullable(false);
            $table->string("nomor_rangka", 100)->nullable(false);
            $table->smallInteger("volume")->nullable(false)->autoIncrement(false);
            $table->tinyInteger("kompartemen")->nullable(false)->autoIncrement(false);
            $table->string("pemilik_stnk", 100)->nullable(false);
            $table->string("alamat_stnk", 100)->nullable(false);
            $table->unsignedBigInteger("perusahaan_id")->nullable(false);
            $table->date("tanggal_pengisian")->nullable(false)->useCurrent();

            $table->foreign('perusahaan_id')->references('id')->on('perusahaan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};