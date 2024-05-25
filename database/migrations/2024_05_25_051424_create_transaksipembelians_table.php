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
        Schema::create('transaksipembelians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_pembelian');
            $table->integer('total_pembelian')->default(50);
            $table->integer('diskon')->default(50);
            $table->integer('pajak')->default(50);
            $table->string('metode_pembelian',50);
            $table->string('status_pembelian',50);
            $table->unsignedBigInteger('id_supplier');
            $table->unsignedBigInteger('id_pegawai');
            $table->timestamps();

            $table->foreign('id_supplier')->references('id')->on('suppliers');
            $table->foreign('id_pegawai')->references('id')->on('pegawais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksipembelians');
    }
};
