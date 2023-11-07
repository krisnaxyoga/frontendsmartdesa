<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikels extends Model
{
    // 
    protected $table = "artikel";

    protected $fillable = [
        'user_id',
        'judul',
        'konten',
        'slug',
        'gambar',
        'kategori_artikel_id',
        'type',
        'status',
        'show_slider',
        'desa_id',
        'nama'
    ];

    
}
