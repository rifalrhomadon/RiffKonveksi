<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailtransaksipenjualan extends Model
{
    use HasFactory;

    protected $table = 'detailtransaksipenjualans';

    protected $fillable = [
        'id_barang',
        'jumlah_barang',
        'harga_jual',
        'diskon',
        'total',
    ];
}
