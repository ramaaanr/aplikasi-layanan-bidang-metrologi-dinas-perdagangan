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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string("nama_perusahaan", 100)->nullable(false);
            $table->string("alamat_skhp", 100)->nullable(false);
            $table->string("kelurahan_skhp", 100)->nullable(false);
            $table->string("kecamatan_skhp", 100)->nullable(false);
            $table->string("kota_skhp", 100)->nullable(false);
            $table->string("provinsi_skhp", 100)->nullable(false);
            $table->date("tanggal_pengisian")->nullable(false)->useCurrent();
            $table->string("jenis_dukungan", 15)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};
