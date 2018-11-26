@extends('template')

@section('title', 'Pengguna')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title ">Tambah Pengguna</h4>
              <p class="card-category"> Tambahkan pengguna baru untuk admin atau pengguna</p>
            </div>
            <div class="card-body">
              <form action="/pengguna" method="post">
                @csrf

                {{-- Input Nama Pengguna --}}
                <div class="form-group">
                  <label for="nama_pengguna">Nama Pengguna</label>
                  <input type="text" class="form-control" name="nama_pengguna" id="nama_pengguna" value="{{ old('nama_pengguna') }}" required autofocus>
                  @if($errors->has('nama_pengguna'))
                    <small id="helpId" class="text-danger">{{ $errors->first('nama_pengguna') }}</small>
                  @endif
                </div>

                {{-- Input Email --}}
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
                  @if($errors->has('email'))
                    <small id="helpId" class="text-danger">{{ $errors->first('email') }}</small>
                  @endif
                </div>

                {{-- Input Username --}}
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}" required>
                  @if($errors->has('username'))
                    <small id="helpId" class="text-danger">{{ $errors->first('username') }}</small>
                  @endif
                </div>

                {{-- Input Password --}}
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" required>
                  @if($errors->has('password'))
                    <small id="helpId" class="text-danger">{{ $errors->first('password') }}</small>
                  @endif
                </div>

                {{-- Input Nama Pengguna --}}
                <div class="form-group">
                  <label for="nama_pengguna">Nama Pengguna</label>
                  <input type="text" class="form-control" name="nama_pengguna" id="nama_pengguna" value="{{ old('nama_pengguna') }}" required>
                  @if($errors->has('nama_pengguna'))
                    <small id="helpId" class="text-danger">{{ $errors->first('nama_pengguna') }}</small>
                  @endif
                </div>

                {{-- Input Nama Pengguna --}}
                <div class="form-group">
                  <label for="nama_pengguna">Nama Pengguna</label>
                  <input type="text" class="form-control" name="nama_pengguna" id="nama_pengguna" value="{{ old('nama_pengguna') }}" required>
                  @if($errors->has('nama_pengguna'))
                    <small id="helpId" class="text-danger">{{ $errors->first('nama_pengguna') }}</small>
                  @endif
                </div>

                {{-- Input Submit --}}
                <button type="submit" class="btn btn-info">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
