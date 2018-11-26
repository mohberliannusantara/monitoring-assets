<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
  public function index()
  {
    $data['inventaris'] = Inventaris::all();
    $data['title'] = 'Inventaris';
    return view('inventaris.index', $data);
  }

  public function create()
  {
    $data['title'] = 'Inventaris';
    return view('inventaris.create', $data);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'nama_inventaris' => 'required|string|min:4',
      'keterangan' => 'required|string|min:10'
    ]);

    Inventaris::create($request->all());
    return redirect('/inventaris');
  }

  public function show($id)
  {
    $data['inventaris'] = Inventaris::find($id);
  }

  public function edit($id)
  {
    $data['inventaris'] = Inventaris::find($id);
    $data['title'] = 'Inventaris';
    return view('inventaris.edit', $data);
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'nama_inventaris' => 'required|string|min:4',
      'keterangan' => 'required|string|min:10'
    ]);

    Inventaris::find($id)->update($request->all());
    return redirect('/inventaris');
  }

  public function destroy($id)
  {
    Inventaris::destroy($id);
    return redirect('/inventaris');
  }

}
