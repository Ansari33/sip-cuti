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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->string('pangkat_golongan')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('unit_kerja')->nullable();
            $table->string('jenis_cuti');
            $table->integer('lama_cuti');
            $table->date('tanggal_pengajuan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir');
            $table->integer('tahun');
            $table->string('status');
            $table->string('dokumen');
            $table->string('surat')->nullable();
            $table->string('alasan');
            $table->string('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
