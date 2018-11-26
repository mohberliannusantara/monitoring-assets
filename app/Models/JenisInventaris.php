<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisInventaris extends Model
{
  protected $table = "jenis_inventaris";
  protected $primaryKey = "id_jenis_inventaris";
  protected $fillable = ['nama_jenis_inventaris'];
}
