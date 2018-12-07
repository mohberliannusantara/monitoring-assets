<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentifikasiController extends Controller
{
    public function index()
    {
      return view('autentifikasi.index');
    }
}
