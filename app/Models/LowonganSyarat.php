<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LowonganSyarat extends Model
{
    protected $table = 'lowongan_syarat';
    protected $primaryKey = 'id_syarat';
    protected $fillable = [
      'id_syarat','id_lowongan','nama_syarat'
    ];
}
