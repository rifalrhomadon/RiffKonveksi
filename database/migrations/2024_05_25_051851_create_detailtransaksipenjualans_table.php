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
        Schema::create('detailtransaksipenjualans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_barang');
            $table->integer('jumlah_barang')->default(50);
            $table->integer('harga_jual')->default(50);
            $table->integer('diskon')->default(50);
            $table->integer('total')->default(50);
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('barangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailtransaksipenjualans');
    }
};
