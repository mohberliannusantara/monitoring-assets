<?php

namespace App\Http\Controllers;

use App\Models\Level;
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
    $data['title'] = 'Level';
    return view('level.create', $data);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'nama_level' => 'required|string|min:4',
      'keterangan' => 'required|string|min:10'
    ]);

    Level::create($request->all());
    return redirect('/level');
  }

  public function show($id)
  {
    $data['level'] = Level::find($id);
  }

  public function edit($id)
  {
    $data['level'] = Level::find($id);
    $data['title'] = 'Level';
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
