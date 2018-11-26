<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
  public function index()
  {
    $data['ruang'] = Ruang::all();
    $data['title'] = 'Ruang';
    return view('ruang.index', $data);
  }

  public function create()
  {
    $data['title'] = 'Ruang';
    return view('ruang.create', $data);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'nama_ruang' => 'required|string|min:4',
      'keterangan' => 'required|string|min:10'
    ]);

    Ruang::create($request->all());
    return redirect('/ruang');
  }

  public function show($id)
  {
    $data['ruang'] = Ruang::find($id);
  }

  public function edit($id)
  {
    $data['ruang'] = Ruang::find($id);
    $data['title'] = 'Ruang';
    return view('ruang.edit', $data);
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'nama_ruang' => 'required|string|min:4',
      'keterangan' => 'required|string|min:10'
    ]);

    Ruang::find($id)->update($request->all());
    return redirect('/ruang');
  }

  public function destroy($id)
  {
    Ruang::destroy($id);
    return redirect('/ruang');
  }

}
