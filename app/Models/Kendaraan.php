<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kendaraan extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];

  protected $table = "kendaraan";
  protected $primaryKey = "id_kendaraan";
  protected $fillable = [
    'nama_kendaraan',
    'nomor_polisi',
    'pengguna',
    'id_rayon',
    'id_jenis_kendaraan',
    'stan_awal',
    'stan_akhir',
    'gambar',
    'keterangan',
    'id_pemilik_kendaraan'
  ];
}
