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
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_invoice');
            $table->unsignedBigInteger('id_pembelian');
            $table->integer('total_pembelian')->default(50);
            $table->integer('diskon')->default(50);
            $table->integer('pajak')->default(50);
            $table->string('metode_pembayaran',50);
            $table->string('status_pembayaran',50);
            $table->timestamps();

            $table->foreign('id_pembelian')->references('id')->on('transaksipembelians');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
