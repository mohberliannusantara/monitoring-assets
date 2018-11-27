@extends('template')

@section('title', 'Level')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-warning">
              <div class="row">
                <div class="col-md-10">
                  <h4 class="card-title">Daftar Level</h4>
                  <p class="card-category"> menampilakan daftar seluruh level yang tersedia</p>
                </div>
              </div>
            </div>
            <div class="card-body">
                {{-- @if ( !isset($level) ) --}}
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-warning">
                        <th>
                          No
                        </th>
                        <th>
                          Nama Level
                        </th>
                        <th>
                          Keterangan
                        </th>
                        <th>
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                        @foreach ($level as $key => $value)
                          <tr>
                            <td>
                              {{ $key + 1 }}
                            </td>
                            <td>
                              {{ $value->nama_level }}
                            </td>
                            <td>
                              {{ $value->keterangan }}
                            </td>
                            <td>
                              <div class="row">
                                <a href="#" onclick="openModal({{ $value->id_level }})" rel="tooltip" title="Lihat" class="btn btn-sm btn-success">
                                  <i class="material-icons">zoom_out_map</i>
                                </a>
                                <a href="level/{{ $value->id_level }}/edit" rel="tooltip" title="Ubah" class="btn btn-sm btn-warning">
                                  <i class="material-icons">edit</i>
                                </a>
                                <form action="/level/{{ $value->id_level }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="material-icons">close</i></button>
                                </form>
                              </div>
                              {{-- <a href="#" id="deleteModal" onclick="deleteModal({{ $value->id_level }})" data-id="{{ $value->id_level }}" data-toggle="modal" data-target="#confirmModal" rel="tooltip" title="Hapus" class="btn btn-sm btn-danger">
                                <i class="material-icons">close</i></a> --}}
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                {{-- @else
                  <center>
                    <p>Tidak Dapat Menampilakan Level</p>
                  </center>
                @endif
              @if (isset($links)) {
                {{ $links }};
              }
              @endif --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <a href="level/create">
              <div class="card-header card-header-info">
                <h4 class="card-title">Tambah Level</h4>
              </div>
            </a>
            <div class="card-body">
              <h6 class="card-category text-gray">Tambahkan Level</h6>
              <p class="card-description">
                Menambahkan level kedalam daftar dengan memasukkan informasi secara detail tentang level tersebut
              </p>
              <a href="level/create" class="btn btn-info btn-round">Tambah</a>
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
            <input type="hidden" id="id_level" value="">
            <p>Apakah Anda yakin untuk menghapus level?</p>
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
      url:"level/get/"+id,
      method: 'post',
      data:null
    }).done(function(data) {
      $('#modal-content').html(data);
      $('#exampleModalCenter').modal('show');
    });
  }

  function deleteModal(id) {
    $('#id_level').val(id);
  }

  function deleteBarang(){
    var id = $('#id_level').val();
    $.ajax({
      url:"level/"+id,
      method: 'post',
      data:null
    }).done(function(data) {
      location.reload();
    });
  }
  </script> --}}

@endsection
