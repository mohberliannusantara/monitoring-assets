<?php

use Illuminate\Database\Seeder;
use \App\Models\Modul;

class ModulSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    for ($i=0; $i < 7; $i++) {
      if ($i == 0) {
        Modul::create([
          'nama_modul' => 'Inventaris',
          'label' => 'Inventaris',
          'icon' => 'inventory'
        ]);
      }elseif ($i == 1) {
        Modul::create([
          'nama_modul' => 'Kendaraan',
          'label' => 'Kendaraan',
          'icon' => 'local_shipping'
        ]);
      }elseif ($i == 2) {
        Modul::create([
          'nama_modul' => 'Properti',
          'label' => 'Properti',
          'icon' => 'home'
        ]);
      }elseif ($i == 3) {
        Modul::create([
          'nama_modul' => 'Ruang',
          'label' => 'Ruang',
          'icon' => 'bubble_chart'
        ]);
      }elseif ($i == 4) {
        Modul::create([
          'nama_modul' => 'Level Admin',
          'label' => 'Level Admin',
          'icon' => 'inventory'
        ]);
      }elseif ($i == 5) {
        Modul::create([
          'nama_modul' => 'Admin',
          'label' => 'Admin',
          'icon' => 'person'
        ]);
      }elseif ($i == 6) {
        Modul::create([
          'nama_modul' => 'Aktifitas',
          'label' => 'Aktifitas',
          'icon' => 'notifications'
        ]);
      }
    }
  }
}
