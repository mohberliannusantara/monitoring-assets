<?php

use Illuminate\Database\Seeder;
use \App\Models\JenisInventaris;

class JenisInventarisSeeder extends Seeder
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
        JenisInventaris::create([
          'nama_jenis_inventaris' => 'Elektronik'
        ]);
      }elseif ($i == 1) {
        JenisInventaris::create([
          'nama_jenis_inventaris' => 'Non Elektronik'
        ]);
      }
    }
  }
}
