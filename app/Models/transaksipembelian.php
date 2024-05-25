<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksipembelian extends Model
{
    use HasFactory;

    protected $table = 'transaksipembelians';

    protected $fillable = [
        'tanggal_pembelian',
        'total_pembelian',
        'diskon',
        'pajak',
        'metode_pembelian',
        'status_pembelian',
        'id_supplier',
        'id_pegawai',
    ];
}
