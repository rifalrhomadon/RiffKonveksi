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
        Schema::create('pengeluarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_pengeluaran');
            $table->unsignedBigInteger('id_biaya');
            $table->integer('jumlah_pengeluaran')->default(50);
            $table->timestamps();

            $table->foreign('id_biaya')->references('id')->on('biayas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluarans');
    }
};
