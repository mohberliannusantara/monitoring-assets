<?php

use Illuminate\Database\Seeder;
use \App\Models\Pengguna;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Pengguna::create([
        'nama_pengguna' => 'admin',
        'username' => 'admin',
        'email' => 'admin@mail.com',
        'password' => bcrypt('admin'),
        'foto' => 'wowo.jpg',
        'id_level' => 5,
        'id_rayon' => 1
      ]);
    }
}
