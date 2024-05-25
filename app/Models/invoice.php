<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;

    protected $table = 'invoicees';

    protected $fillable = [
        'tanggal_invoice',
        'id_pembelian',
        'total_pembelian',
        'diskon',
        'pajak',
        'metode_pembayaran',
        'status_pembayaran',
    ];
}
