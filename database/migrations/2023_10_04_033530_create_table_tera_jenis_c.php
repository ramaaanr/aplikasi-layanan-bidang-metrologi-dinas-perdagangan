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
        Schema::create('tera_jenis_c', function (Blueprint $table) {
            $table->id();
            $table->string("kode_pengajuan", 20)->nullable(false)->unique();
            $table->string("no_surat", 50)->nullable(true)->unique();
            $table->string("jenis_tera", 50)->nullable(false);
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
            $table->string("dokumen_bukti_pendukung_lainnya", 100)->nullable(false);
            $table->int("jumlah_uttp")->nullable(false);
            $table->string("status", 15)->nullable(false);
            $table->string("keterangan", 500)->nullable(false);
            $table->unsignedBigInteger("admin_id")->nullable(true);
            $table->date("tanggal_pengujian")->nullable(false);
            $table->date("tanggal_pengajuan")->nullable(false)->useCurrent();
            $table->string("tempat_pengujian", 100)->nullable(false);
            $table->string("alamat_pengujian", 100)->nullable(false);

            $table->foreign('admin_id')->references('id')->on('admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tera_jenis_c');
    }
};
