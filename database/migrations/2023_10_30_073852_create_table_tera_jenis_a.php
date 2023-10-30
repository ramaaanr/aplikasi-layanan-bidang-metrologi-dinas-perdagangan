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
        Schema::create('tera_jenis_a', function (Blueprint $table) {
            $table->id();
            $table->string("kode_pengajuan", 20)->nullable(false)->unique();
            $table->string("no_surat", 50)->nullable(true)->unique();

            $table->string("nama_pemohon", 100)->nullable(false);
            $table->string("alamat_pemohon", 100)->nullable(false);

            $table->string("nama_skhp", 100)->nullable(false);
            $table->string("alamat_skhp", 100)->nullable(false);
            $table->string("kelurahan_skhp", 100)->nullable(false);
            $table->string("kecamatan_skhp", 100)->nullable(false);
            $table->string("kota_skhp", 100)->nullable(false);
            $table->string("provinsi_skhp", 100)->nullable(false);

            $table->string("merek_kendaraan", 100)->nullable(false);
            $table->string("nomor_polisi", 100)->nullable(false);
            $table->string("nomor_rangka", 100)->nullable(false);
            $table->string("pemilik_stnk", 100)->nullable(false);
            $table->string("alamat_stnk", 100)->nullable(false);

            $table->string("nomor_kontak", 20)->nullable(false);

            $table->string("dokumen_surat_permohonan", 100)->nullable(false);
            $table->string("dokumen_stnk", 100)->nullable(false);
            $table->string("dokumen_skhp_sebelumnya", 100)->nullable(false);
            $table->string("dokumen_bukti_pendukung_lainnya", 100)->nullable(false);

            $table->smallInteger("volume")->nullable(false)->autoIncrement(false);
            $table->tinyInteger("kompartemen")->nullable(false)->autoIncrement(false);

            $table->boolean("lemping_volume_nominal")->nullable(false);
            $table->boolean("indeks_tera")->nullable(false);
            $table->boolean("merk_tum_bbm")->nullable(false);

            $table->string("status", 15)->nullable(false);
            $table->string("keterangan", 100)->nullable(false);

            $table->unsignedBigInteger("admin_id")->nullable(true);

            $table->date("tanggal_pengujian")->nullable(false);
            $table->date("tanggal_cek_fisik")->nullable(false);
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
        Schema::dropIfExists('tera_jenis_a');
    }
};
