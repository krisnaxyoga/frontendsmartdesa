<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    //
        protected $table = "desa";

        protected $fillable = [
            'id',
            'nama_desa',
            'kode_desa',
            'nama_kepala_desa',
            'nip_kepala_desa',
            'nama_kecamatan',
            'nama_kabupaten',
            'logo',
            'logo_landscape',
            'alamat_kantor'
        ];
}
