@extends('template')

@section('title', 'Level')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title ">Ubah Level</h4>
              <p class="card-category"> Mengubah informasi tentang level untuk admin atau pengguna</p>
            </div>
            <div class="card-body">
              <form action="/level" method="post">
                @csrf
                @method('put')
                
                {{-- Input Nama Level --}}
                <div class="form-group">
                  <label for="nama_level">Nama Level</label>
                  <input type="text" class="form-control" name="nama_level" id="nama_level" value="{{ old('nama_level', $level->nama_level) }}" required autofocus>
                  @if($errors->has('nama_level'))
                    <small id="helpId" class="text-danger">{{ $errors->first('nama_level') }}</small>
                  @endif
                </div>

                {{-- Input Keterangan --}}
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea name="keterangan" id="keterangan" rows="3" class="form-control">{{ old('keterangan', $level->keterangan) }}</textarea>
                  {{-- <input type="text" class="form-control" name="nama_level" id="nama_level" value="{{ old('nama_level', $level->nama_level) }}"> --}}
                  @if($errors->has('keterangan'))
                    <small id="helpId" class="text-danger">{{ $errors->first('keterangan') }}</small>
                  @endif
                </div>

                {{-- Input Submit --}}
                <button type="submit" class="btn btn-warning">Simpan</button>

                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT"> --}}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
