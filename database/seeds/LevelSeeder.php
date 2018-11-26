<?php

use Illuminate\Database\Seeder;
use \App\Models\Level;

class LevelSeeder extends Seeder
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
        Level::create([
          'nama_level' => 'super admin',
          'keterangan' => str_random(20)
        ]);
      }elseif ($i == 1) {
        Level::create([
          'nama_level' => 'admin inventaris',
          'keterangan' => str_random(20)
        ]);
      }
    }
  }
}
