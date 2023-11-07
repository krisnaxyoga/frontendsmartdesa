<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
        protected $table = 'slider';
    
        protected $fillable = [
            'desa_id',
            'title',
            'gambar',
        ];
}
