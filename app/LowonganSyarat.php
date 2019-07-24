<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LowonganSyarat extends Model
{
    protected $table = 'lowongan_syarat';
	protected $primaryKey = 'id_syarat';
	protected $guarded=[];
}
