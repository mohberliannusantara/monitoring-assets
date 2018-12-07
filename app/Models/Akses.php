<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Akses extends Model
{
  protected $table = "akses";
  protected $primaryKey = "id_akses";
  protected $fillable = ['id_modul', 'id_level'];
}
