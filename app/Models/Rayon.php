<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
  protected $table = "rayon";
  protected $primaryKey = "id_rayon";
  protected $fillable = ['nama_rayon'];

  public function inventaris()
  {
    return $this->hasMany('Inventaris');
  }

  public function jenis_inventaris()
  {
    return $this->belongsTo('App\Models\JenisInventaris');
  }
}
