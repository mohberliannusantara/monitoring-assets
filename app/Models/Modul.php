<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
  protected $table = "modul";
  protected $primaryKey = "id_modul";
  protected $fillable = ['nama_modul', 'label', 'icon'];
}
