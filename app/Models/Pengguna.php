<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
  protected $table = "pengguna";
  protected $primaryKey = "id_pengguna";
  protected $fillable = ['nama_pengguna', 'username', 'email', 'password', 'foto', 'id_level', 'id_rayon'];
}
