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
        Schema::create('tb_tanaman', function (Blueprint $table) {
            $table->id('id_tanaman');
            $table->string('kode_tanaman'); // Kode otomatis, misal: T001, T002, dst.
            $table->string('nama_tanaman');
            $table->string('jenis');
            $table->string('lokasi')->nullable();
            $table->date('tanggal_tanam');
            $table->integer('kebutuhan_air'); // dalam ml/hari
            $table->enum('status', ['Sehat', 'Layu', 'Mati'])->default('Sehat');
            $table->string('intensitas_cahaya')->nullable(); // misal: Rendah, Sedang, Tinggi
            $table->integer('durasi_cahaya_jam')->nullable(); // jam per hari
            $table->string('sumber_cahaya')->nullable(); // misal: Matahari, Lampu LED
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_jenis')->nullable();
            $table->date('laporan_terakhir')->nullable();
            $table->timestamps();

            // Opsional foreign key jika relasi tersedia
            // $table->foreign('id_user')->references('id')->on('users')->onDelete('set null');
            // $table->foreign('id_jenis')->references('id')->on('jenis_tanaman')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tanaman');
    }
};
