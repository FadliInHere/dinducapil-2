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
        Schema::create('kehilangan_ktp', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('alamat');
            $table->date('tanggal_kehilangan');
            $table->string('tempat_kehilangan');
            $table->text('keterangan')->nullable();
            $table->string('status_pengajuan')->default('Proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehilangan_ktp');
    }
};
