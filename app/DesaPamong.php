<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesaPamong extends Model
{
    //
    protected $table = "desa_pamong";

    protected $fillable = [
        'id',
        'desa_id',
        'pamong_nama',
        'jabatan',
        'is_kades',
        'pamong_status',
        'foto',
        'pamong_nip',
        'pamong_tgl_terdaftar',
        'pamong_nik',
    ];
}
