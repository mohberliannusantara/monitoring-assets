<?php

use Illuminate\Database\Seeder;
use \App\Models\JenisKendaraan;

class JenisKendaraanSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    for ($i=0; $i < 2; $i++) {
      if ($i == 0) {
        JenisKendaraan::create([
          'nama_jenis_kendaraan' => 'Roda 4'
        ]);
      }else {
        JenisKendaraan::create([
          'nama_jenis_kendaraan' => 'Roda 2'
        ]);
      }
    }
  }
}
