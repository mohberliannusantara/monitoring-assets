<?php

namespace App\Http\Controllers\PenggunaAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Class needed for login and logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// Use Auth
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Trait
    use AuthenticatesUsers;

    // where to redirect pengguna after login
    protected $redirectTo = '/beranda';

    // Custom guard for pengguna
    protected function guard()
    {
      return Auth::guard('pengguna');
    }

    public function showLoginForm()
    {
      return view('autentifikasi.index');
    }

    public function username()
    {
        return 'username';
    }
}
