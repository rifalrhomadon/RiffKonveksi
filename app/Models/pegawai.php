<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawais';

    protected $fillable = [
        'nama_pegawai',
        'jabatan_pegawai',
        'alamat_pegawai',
        'telepon_pegawai',
        'email_pegawai',
        'gaji_pegawai',
    ];
}
