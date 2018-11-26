<?php

use Illuminate\Database\Seeder;
use \App\Models\Rayon;

class RayonSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    for ($i=1; $i <= 9; $i++) {
      if ($i == 1) {
        Rayon::create([
          'nama_rayon' => 'pasuruan'
        ]);
      }elseif ($i == 2) {
        Rayon::create([
          'nama_rayon' => 'grati'
        ]);
      }elseif ($i == 3) {
        Rayon::create([
          'nama_rayon' => 'probolinggo'
        ]);
      }elseif ($i == 4) {
        Rayon::create([
          'nama_rayon' => 'gondang wetan'
        ]);
      }elseif ($i == 5) {
        Rayon::create([
          'nama_rayon' => 'bangil'
        ]);
      }elseif ($i == 6) {
        Rayon::create([
          'nama_rayon' => 'prigen'
        ]);
      }elseif ($i == 7) {
        Rayon::create([
          'nama_rayon' => 'pandaan'
        ]);
      }elseif ($i == 8) {
        Rayon::create([
          'nama_rayon' => 'kraksaan'
        ]);
      }elseif ($i == 9) {
        Rayon::create([
          'nama_rayon' => 'sukorejo'
        ]);
      }
    }
  }
}
