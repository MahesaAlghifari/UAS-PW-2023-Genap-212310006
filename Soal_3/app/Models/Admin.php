<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'judul',
        'isi',
        'tanggal_upload',
        'images',
    ];

    // Tambahkan relasi atau metode lainnya di sini
}
