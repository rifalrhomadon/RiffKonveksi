<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailtransaksipembelian extends Model
{
    use HasFactory;

    protected $table = 'detailtransaksipembelians';

    protected $fillable = [
        'id_barang',
        'jumlah_barang',
        'harga_jual',
        'diskon',
        'total',
    ];
}
