<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Inventaris extends Model
{
  // use SoftDeletes;
  // protected $dates = ['deleted_at'];

  protected $table = "inventaris";
  protected $primaryKey = "id_inventaris";
  protected $fillable = [
    'nama_inventaris',
    'merk',
    'jumlah',
    'satuan',
    'keterangan',
    'gambar',
    'id_ruang',
    'id_jenis_inventaris',
    'id_rayon'
  ];

  public function ruang()
  {
    return $this->belongsTo('Ruang', );
  }

  public function rayon()
  {
    return $this->belongsTo('App\Models\Rayon');
  }
}
