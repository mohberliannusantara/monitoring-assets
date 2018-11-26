<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
  protected $table = "rayon";
  protected $primaryKey = "id_rayon";
  protected $fillable = ['nama_rayon'];
}
