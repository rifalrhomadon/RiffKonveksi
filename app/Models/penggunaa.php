<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penggunaa extends Model
{
    use HasFactory;

    protected $table = 'penggunaas';

    protected $fillable = [
        'nama_pengguna',
        'username',
        'password',
    ];
}

