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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pegawai',50);
            $table->string('jabatan_pegawai',50);
            $table->string('alamat_pegawai',50);
            $table->integer('telepon_pegawai')->default(12);
            $table->string('email_pegawai',25);
            $table->integer('gaji_pegawai')->default(100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
