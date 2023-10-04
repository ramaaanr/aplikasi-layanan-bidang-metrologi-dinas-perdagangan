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
        Schema::create('tera_jenis_1', function (Blueprint $table) {
            $table->id();
            $table->string("kode_pengajuan", 20)->nullable(false)->unique();
            $table->string("nama_pemohon", 100)->nullable(false);
            $table->string("alamat_pemohon", 100)->nullable(false);
            $table->string("nama_skhp", 100)->nullable(false);
            $table->string("alamat_skhp", 100)->nullable(false);
            $table->string("kelurahan_skhp", 100)->nullable(false);
            $table->string("kecamatan_skhp", 100)->nullable(false);
            $table->string("kota_skhp", 100)->nullable(false);
            $table->string("nomor_kontak", 20)->nullable(false);
            $table->string("dokumen_surat_permohonan", 100)->nullable(false);
            $table->string("dokumen_skhp_sebelumnya", 100)->nullable(false);
            $table->string("id_dokumen_bukti_pendukung_lainnya", 100)->unique()->nullable(false);
            $table->string("jumlah_uttp", 20)->nullable(true);
            $table->string("id_uttp", 20)->nullable(true);
            $table->string("status", 10)->nullable(false);
            $table->string("keterangan", 100)->nullable(false);
            $table->date("tanggal_pengujian")->nullable(false);
            $table->date("tanggal_pengajuan")->nullable(false)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tera_jenis_1');
    }
};
