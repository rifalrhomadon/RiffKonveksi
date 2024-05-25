<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukubesar extends Model
{
    use HasFactory;

    protected $table = 'bukubesars';

    protected $fillable = [
        'nama_akun',
        'saldo_awal',
        'debet',
        'kredit',
        'saldo_akhir',
        'id_pengeluaran',
    ];
}
