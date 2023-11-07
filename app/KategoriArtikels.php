<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikels extends Model
{
    //
    protected $table = "kategori_artikel";

    protected $fillable = [
        'id',
        'nama',
        'status',
    ];
}
