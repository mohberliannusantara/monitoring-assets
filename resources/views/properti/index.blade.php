@extends('template')

@section('title', 'Properti')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-profile">
            <a href="properti/create">
              <div class="card-header card-header-info">
                <h4 class="card-title">Tambah Properti</h4>
              </div>
            </a>
            <div class="card-body">
              <h6 class="card-category text-gray">Tambahkan Properti</h6>
              <p class="card-description">
                Tambahkan properti kedalam daftar dengan memasukkan informasi secara detail tentang properti tersebut
              </p>
              <a href="properti/create" class="btn btn-info btn-round">Tambah</a>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-warning">
              <div class="row">
                <div class="col-md-10">
                  <h4 class="card-title">Daftar Properti</h4>
                  <p class="card-category"> menampilakan daftar seluruh properti yang tersedia</p>
                </div>
              </div>
            </div>
            <div class="card-body">
                {{-- @if ( !isset($properti) ) --}}
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-warning">
                        <th>
                          No
                        </th>
                        <th>
                          Nama Properti
                        </th>
                        <th>
                          Alamat
                        </th>
                        <th>
                          Kecamatan
                        </th>
                        <th>
                          Kode Pos
                        </th>
                        <th>
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                        @foreach ($properti as $key => $value)
                          <tr>
                            <td>
                              {{ $key + 1 }}
                            </td>
                            <td>
                              {{ $value->nama_properti }}
                            </td>
                            <td>
                              {{ $value->alamat }}
                            </td>
                            <td>
                              {{ $value->kecamatan }}
                            </td>
                            <td>
                              {{ $value->kode_pos }}
                            </td>
                            <td>
                              <div class="row">
                                <a href="#" onclick="openModal({{ $value->id_properti }})" rel="tooltip" title="Lihat" class="btn btn-sm btn-success">
                                  <i class="material-icons">zoom_out_map</i>
                                </a>
                                <a href="properti/{{ $value->id_properti }}/edit" rel="tooltip" title="Ubah" class="btn btn-sm btn-warning">
                                  <i class="material-icons">edit</i>
                                </a>
                                <form action="/properti/{{ $value->id_properti }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="material-icons">close</i></button>
                                </form>
                              </div>
                              {{-- <a href="#" id="deleteModal" onclick="deleteModal({{ $value->id_properti }})" data-id="{{ $value->id_properti }}" data-toggle="modal" data-target="#confirmModal" rel="tooltip" title="Hapus" class="btn btn-sm btn-danger">
                                <i class="material-icons">close</i></a> --}}
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                {{-- @else
                  <center>
                    <p>Tidak Dapat Menampilakan Properti</p>
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
            <input type="hidden" id="id_properti" value="">
            <p>Apakah Anda yakin untuk menghapus properti?</p>
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
      url:"properti/get/"+id,
      method: 'post',
      data:null
    }).done(function(data) {
      $('#modal-content').html(data);
      $('#exampleModalCenter').modal('show');
    });
  }

  function deleteModal(id) {
    $('#id_properti').val(id);
  }

  function deleteBarang(){
    var id = $('#id_properti').val();
    $.ajax({
      url:"properti/"+id,
      method: 'post',
      data:null
    }).done(function(data) {
      location.reload();
    });
  }
  </script> --}}

@endsection
