<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outlet extends Model
{
    use HasFactory;

    protected $table = 'outlets';

    protected $fillable = [
        'nama_outlet',
        'alamat_outlet',
        'email_outlet',
    ];
}

