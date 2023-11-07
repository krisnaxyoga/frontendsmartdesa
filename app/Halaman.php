<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Halaman extends Model
{
    protected $table = "halaman";

    protected $fillable = [
        'id',
        'judul',
        'tipe',
        'gambar',
        'konten',
        'slug',
        'created_at',
        'updated_at',
        'desa_id',
    ];
}
