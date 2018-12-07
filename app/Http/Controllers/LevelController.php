<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Modul;
use App\Models\Akses;
use Illuminate\Http\Request;

class LevelController extends Controller
{
  public function index()
  {
    $data['level'] = Level::all();
    $data['title'] = 'Level';
    return view('level.index', $data);
  }

  public function create()
  {
    $data['modul'] = Modul::all();
    $data['title'] = 'Level';
    return view('level.create', $data);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'nama_level' => 'required|string'
    ]);

    $level = Level::create($request->all());

    foreach ($request->id_modul as $row) {
        Akses::create([
            'id_level' => $level->id_level,
            'id_modul' => $row
        ]);
    }
    return redirect('/level');
  }

  public function show($id)
  {
    $data['level'] = Level::find($id);
  }

  public function edit($id)
  {
    $data['title'] = 'Level';

    $data['level'] = Level::find($id);
    $data['modul'] = Modul::all();
    
    $data['level_akses'] = array_map(function ($item) {
      return $item['id_modul'];
    }, $data['level']->akses->toArray());

    return view('level.edit', $data);
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'nama_level' => 'required|string|min:4',
      'keterangan' => 'required|string|min:10'
    ]);

    Level::find($id)->update($request->all());
    return redirect('/level');
  }

  public function destroy($id)
  {
    Level::destroy($id);
    return redirect('/level');
  }

}
