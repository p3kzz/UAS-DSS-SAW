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
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alternatif');
            $table->unsignedBigInteger('harga'); // ? 20
            $table->unsignedBigInteger('kualitas');
            $table->unsignedBigInteger('kecepatan_pengiriman');
            $table->unsignedBigInteger('konsistensi_pasokan');
            $table->unsignedBigInteger('kemudahan_komunikasi');
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')
                ->references('id')
                ->on('kategoris')
                ->onDelete('cascade');
             $table->unsignedBigInteger('kriteria_id');
            $table->foreign('kriteria_id')
                ->references('id')
                ->on('kriterias')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatifs');
    }
};
