@extends('template')

@section('title', 'Ruang')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title ">Tambah Ruang</h4>
              <p class="card-category"> Tambahkan data ruang dengan informasi yang lengkap</p>
            </div>
            <div class="card-body">
              <form action="/ruang" method="post">
                @csrf

                {{-- Input Nama Ruang --}}
                <div class="form-group">
                  <label for="nama_ruang">Nama Ruang</label>
                  <input type="text" class="form-control" name="nama_ruang" id="nama_ruang" value="{{ old('nama_ruang') }}" required autofocus>
                  @if($errors->has('nama_ruang'))
                    <small id="helpId" class="text-danger">{{ $errors->first('nama_ruang') }}</small>
                  @endif
                </div>

                {{-- Input Nama Ruang --}}
                <div class="form-group">
                  <label for="id_rayon">Nama Ruang</label>
                  <input type="text" class="form-control" name="id_rayon" id="id_rayon" value="{{ old('id_rayon') }}" required autofocus>
                  @if($errors->has('id_rayon'))
                    <small id="helpId" class="text-danger">{{ $errors->first('id_rayon') }}</small>
                  @endif
                </div>

                {{-- Input Keterangan --}}
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea name="keterangan" id="keterangan" rows="3" class="form-control" required>{{ old('keterangan') }}</textarea>
                  {{-- <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{ old('keterangan') }}" required> --}}
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
