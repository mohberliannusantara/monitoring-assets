<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
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
}