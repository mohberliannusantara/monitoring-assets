<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemilikKendaraan extends Model
{
  protected $table = "pemilik_kendaraan";
  protected $primaryKey = "id_pemilik_kendaraan";
  protected $fillable = ['nama_pemilik_kendaraan', 'telepon', 'keterangan'];
}
