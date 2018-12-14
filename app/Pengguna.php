<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

// Class which implements Illuminate\Contracts\Auth\Authenticatable
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    protected $table = 'my_flights';
    
    // Mass assigned attributes
    protected $fillable = [
      'nama_pengguna', 'username', 'email', 'password', 'foto', 'id_level', 'id_rayon'
    ];

    // hidden attributes
    protected $hidden = [
      'password', 'remember_token'
    ];
}
