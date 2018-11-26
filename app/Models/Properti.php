<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
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
