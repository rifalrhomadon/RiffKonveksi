<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksipenjualan extends Model
{
    use HasFactory;

    protected $table = 'transaksipenjualans';

    protected $fillable = [
        'tanggal_penjualan',
        'metode_penjualan',
        'total_transaksi',
        'diskon',
        'pajak',
        'status_penjualan',
        'id_outlet',
        'id_customer',
        'id_pegawai',
        'id_invoice',
        'id_pengguna',
    ];
}
