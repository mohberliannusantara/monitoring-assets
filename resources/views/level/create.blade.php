@extends('template')

@section('title', 'Level')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title ">Tambah Level</h4>
              <p class="card-category"> Tambahkan level baru untuk admin atau pengguna</p>
            </div>
            <div class="card-body">
              <form action="/level" method="post">
                @csrf

                {{-- Input Nama Level --}}
                <div class="form-group">
                  <label for="nama_level">Nama Level</label>
                  <input type="text" class="form-control" name="nama_level" id="nama_level" value="{{ old('nama_level') }}" required autofocus>
                  @if($errors->has('nama_level'))
                    <small id="helpId" class="text-danger">{{ $errors->first('nama_level') }}</small>
                  @endif
                </div>

                {{-- Input Keterangan --}}
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{ old('keterangan') }}" required>
                  @if($errors->has('keterangan'))
                    <small id="helpId" class="text-danger">{{ $errors->first('keterangan') }}</small>
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
