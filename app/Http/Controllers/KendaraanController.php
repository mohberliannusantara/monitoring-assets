<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
  public function index()
  {
    $data['kendaraan'] = Kendaraan::all();
    $data['title'] = 'Kendaraan';
    return view('kendaraan.index', $data);
  }

  public function create()
  {
    $data['title'] = 'Kendaraan';
    return view('kendaraan.create', $data);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'nama_kendaraan' => 'required|string|min:4',
      'keterangan' => 'required|string|min:10'
    ]);

    Kendaraan::create($request->all());
    return redirect('/kendaraan');
  }

  public function show($id)
  {
    $data['kendaraan'] = Kendaraan::find($id);
  }

  public function edit($id)
  {
    $data['kendaraan'] = Kendaraan::find($id);
    $data['title'] = 'Kendaraan';
    return view('kendaraan.edit', $data);
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'nama_kendaraan' => 'required|string|min:4',
      'keterangan' => 'required|string|min:10'
    ]);

    Kendaraan::find($id)->update($request->all());
    return redirect('/kendaraan');
  }

  public function destroy($id)
  {
    Kendaraan::destroy($id);
    return redirect('/kendaraan');
  }

}
