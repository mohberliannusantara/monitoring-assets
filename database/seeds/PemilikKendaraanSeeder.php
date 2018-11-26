<?php

use Illuminate\Database\Seeder;
use \App\Models\PemilikKendaraan;

class PemilikKendaraanSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    for ($i=0; $i < 5; $i++) {
      if ($i == 0) {
        PemilikKendaraan::create([
          'nama_pemilik_kendaraan' => 'PLN',
          'telepon' => '0',
          'keterangan' => str_random(10)
        ]);
      }elseif ($i == 1) {
        PemilikKendaraan::create([
          'nama_pemilik_kendaraan' => 'PT KASTIL',
          'telepon' => '0',
          'keterangan' => str_random(10)
        ]);
      }elseif ($i == 2) {
        PemilikKendaraan::create([
          'nama_pemilik_kendaraan' => 'AGUNG RENTCAR',
          'telepon' => '0',
          'keterangan' => str_random(10)
        ]);
      }elseif ($i == 3) {
        PemilikKendaraan::create([
          'nama_pemilik_kendaraan' => 'TAKARI',
          'telepon' => '0',
          'keterangan' => str_random(10)
        ]);
      }elseif ($i == 4) {
        PemilikKendaraan::create([
          'nama_pemilik_kendaraan' => 'PELITA BANYUWANGI',
          'telepon' => '0',
          'keterangan' => str_random(10)
        ]);
      }
    }
  }
}
