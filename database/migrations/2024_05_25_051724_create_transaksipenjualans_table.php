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
        Schema::create('transaksipenjualans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_penjualan');
            $table->string('metode_penjualan',50);
            $table->integer('total_penjualan')->default(50);
            $table->integer('diskon')->default(50);
            $table->integer('pajak')->default(50);
            $table->string('status_pembayaran',50);
            $table->unsignedBigInteger('id_outlet');
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_invoice');
            $table->unsignedBigInteger('id_pengguna');
            $table->timestamps();

            $table->foreign('id_outlet')->references('id')->on('outlets');
            $table->foreign('id_customer')->references('id')->on('customers');
            $table->foreign('id_pegawai')->references('id')->on('pegawais');
            $table->foreign('id_invoice')->references('id')->on('invoices');
            $table->foreign('id_pengguna')->references('id')->on('penggunas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksipenjualans');
    }
};
