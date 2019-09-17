<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
  protected $table = 'pelamar';
  protected $primaryKey = 'id';
  protected $fillable = [
    'user_id','lowongan_id','surat_lamaran','cv','ijasah','status','score'
  ];

  public function nilai()
  {
    return $this->hasOne('App\Models\Nilai', 'id_pelamar', 'id');
  }

  public function user()
  {
    return $this->belongsTo('App\User', 'user_id', 'id');
  }
}
