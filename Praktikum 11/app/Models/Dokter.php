<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'dokters';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'kategori',
        'gender',
        'telpon',
        'alamat',
    ];

    // disable timestamps
    public $timestamps = false;
}
