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
        Schema::create('bukubesars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_akun',50);
            $table->integer('saldo_awal')->default(50);
            $table->integer('debet')->default(50);
            $table->integer('kredit')->default(50);
            $table->integer('saldo_akhir')->default(50);
            $table->unsignedBigInteger('id_pengeluaran');
            $table->timestamps();

            $table->foreign('id_pengeluaran')->references('id')->on('pengeluarans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukubesars');
    }
};
