@extends('template')

@section('title', 'Inventaris')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-profile">
            <div class="card-body">
              <h4 class="card-title">Filter Rayon</h4>
              <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Rayon
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                  <button class="dropdown-item" type="button">Something else here</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                </div>
              </div>
              <p class="card-category">Tampilkan Inventaris Dari Rayon Tertentu</p>
            </div>
          </div>
          <div class="card card-profile">
            <div class="card-body">
              <h4 class="card-title">Tambah Inventaris</h4>
              <a href="inventaris/create" class="btn btn-info">Tambah</a>
              <p class="card-category">Tambahkan Inventaris baru kedalam daftar</p>
            </div>
          </div>
          {{-- <div class="card card-profile">
            <a href="inventaris/create">
              <div class="card-header card-header-info">
                <h4 class="card-title">Tambah Inventaris</h4>
              </div>
            </a>
            <div class="card-body">
              <h6 class="card-category text-gray">Tambahkan Inventaris</h6>
              <p class="card-description">
                Menambahkan inventaris kedalam daftar dengan memasukkan informasi secara detail tentang inventaris tersebut
              </p>
              <a href="inventaris/create" class="btn btn-info btn-round">Tambah</a>
            </div>
          </div> --}}
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-warning">
              <div class="row">
                <div class="col-md-10">
                  <h4 class="card-title">Daftar Inventaris</h4>
                  <p class="card-category"> menampilakan daftar seluruh inventaris yang tersedia</p>
                </div>
              </div>
            </div>
            <div class="card-body">
                {{-- @if ( !isset($inventaris) ) --}}
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-warning">
                        <th>
                          No
                        </th>
                        <th>
                          Nama Inventaris
                        </th>
                        <th>
                          Jumlah
                        </th>
                        <th>
                          Satuan
                        </th>
                        <th>
                          Ruang
                        </th>
                        <th>
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                        @foreach ($inventaris as $key => $value)
                          <tr>
                            <td>
                              {{ $key + 1 }}
                            </td>
                            <td>
                              {{ $value->nama_inventaris }}
                            </td>
                            <td>
                              {{ $value->jumlah }}
                            </td>
                            <td>
                              {{ $value->satuan }}
                            </td>
                            <td>
                              {{ $value->ruang->nama_ruang }}
                            </td>
                            <td>
                              <div class="row">
                                <a href="#" onclick="openModal({{ $value->id_inventaris }})" rel="tooltip" title="Lihat" class="btn btn-sm btn-success">
                                  <i class="material-icons">zoom_out_map</i>
                                </a>
                                <a href="inventaris/{{ $value->id_inventaris }}/edit" rel="tooltip" title="Ubah" class="btn btn-sm btn-warning">
                                  <i class="material-icons">edit</i>
                                </a>
                                <form action="/inventaris/{{ $value->id_inventaris }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="material-icons">close</i></button>
                                </form>
                              </div>
                              {{-- <a href="#" id="deleteModal" onclick="deleteModal({{ $value->id_inventaris }})" data-id="{{ $value->id_inventaris }}" data-toggle="modal" data-target="#confirmModal" rel="tooltip" title="Hapus" class="btn btn-sm btn-danger">
                                <i class="material-icons">close</i></a> --}}
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                {{-- @else
                  <center>
                    <p>Tidak Dapat Menampilakan Inventaris</p>
                  </center>
                @endif
              @if (isset($links)) {
                {{ $links }};
              }
              @endif --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Hapus</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" id="id_inventaris" value="">
            <p>Apakah Anda yakin untuk menghapus inventaris?</p>
          </div>
        </div>
        <div class="modal-footer">
          <button id="deleteButton" onclick="deleteBarang()" type="submit" class="btn btn-danger">Hapus</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Info Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-content">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  {{-- <script type="text/javascript">
  function openModal(id) {
    $.ajax({
      url:"inventaris/get/"+id,
      method: 'post',
      data:null
    }).done(function(data) {
      $('#modal-content').html(data);
      $('#exampleModalCenter').modal('show');
    });
  }

  function deleteModal(id) {
    $('#id_inventaris').val(id);
  }

  function deleteBarang(){
    var id = $('#id_inventaris').val();
    $.ajax({
      url:"inventaris/"+id,
      method: 'post',
      data:null
    }).done(function(data) {
      location.reload();
    });
  }
  </script> --}}

@endsection
