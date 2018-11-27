<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Properti extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];

  protected $table = "pemilik_kendaraan";
  protected $primaryKey = "id_pemilik_kendaraan";
  protected $fillable = [
    'nama_properti',
    'alamat',
    'kecamatan',
    'id_rayon',
    'kode_pos',
    'gambar',
    'keterangan',
    'latitude',
    'longitude'
  ];
}
