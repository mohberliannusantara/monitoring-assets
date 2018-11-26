<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
  public function index()
  {
    $data['pengguna'] = Pengguna::all();
    $data['title'] = 'Pengguna';
    return view('pengguna.index', $data);
  }

  public function create()
  {
    $data['title'] = 'Pengguna';
    return view('pengguna.create', $data);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'nama_pengguna' => 'required|string|min:4',
      'username' => 'required|string|min:6',
      'email' => 'required|is_unique',
      'password' => 'required|string|min:6',
      'id_level' => 'required|numeric',
      'id_rayon' => 'required|numeric',
    ]);

    Pengguna::create($request->all());
    return redirect('/pengguna');
  }

  public function show($id)
  {
    $data['pengguna'] = Pengguna::find($id);
  }

  public function edit($id)
  {
    $data['pengguna'] = Pengguna::find($id);
    $data['title'] = 'Pengguna';
    return view('pengguna.edit', $data);
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'nama_pengguna' => 'required|string|min:4',
      'username' => 'required|string|min:6',
      'email' => 'required|is_unique',
      'password' => 'required|string|min:6',
      'id_level' => 'required|numeric',
      'id_rayon' => 'required|numeric',
    ]);

    Pengguna::find($id)->update($request->all());
    return redirect('/pengguna');
  }

  public function destroy($id)
  {
    Pengguna::destroy($id);
    return redirect('/pengguna');
  }

}
