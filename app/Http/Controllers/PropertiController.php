<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;

class PropertiController extends Controller
{
  public function index()
  {
    $data['properti'] = Properti::all();
    $data['title'] = 'Properti';
    return view('properti.index', $data);
  }

  public function create()
  {
    $data['title'] = 'Properti';
    return view('properti.create', $data);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'nama' => 'required|string|min:4',
      'keterangan' => 'required|string|min:10'
    ]);

    Properti::create($request->all());
    return redirect('/properti');
  }

  public function show($id)
  {
    $data['properti'] = Properti::find($id);
  }

  public function edit($id)
  {
    $data['properti'] = Properti::find($id);
    $data['title'] = 'Properti';
    return view('properti.edit', $data);
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'nama' => 'required|string|min:5',
      'keterangan' => 'required|string|min:10'
    ]);

    Properti::find($id)->update($request->all());
    return redirect('/properti');
  }

  public function destroy($id)
  {
    Properti::destroy($id);
    return redirect('/properti');
  }

}
