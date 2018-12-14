<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
  protected $table = "pengguna";
  protected $primaryKey = "id_pengguna";
  protected $fillable = ['nama_pengguna', 'username', 'email', 'password', 'foto', 'id_level', 'id_rayon'];
}
