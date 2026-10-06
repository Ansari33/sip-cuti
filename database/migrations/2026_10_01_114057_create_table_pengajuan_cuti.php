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
        Schema::create('pengajuan_cutis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pegawai');
            $table->integer('id_jenis_cuti');
            $table->integer('tahun');
            $table->date('tanggal_pengajuan');
            $table->integer('jumlah_hari');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('alasan');
            $table->integer('penerima')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_cutis');
    }
};
