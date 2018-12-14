@extends('template')

@section('title', 'Pengguna')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Profil Pengguna</h4>
              <p class="card-category">melihat daftar dan detail profil pengguna</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class="text-warning">
                    <th>
                      No
                    </th>
                    <th>
                      Nama
                    </th>
                    <th>
                      Level
                    </th>
                    <th>
                      Rayon
                    </th>
                    <th>
                      aksi
                    </th>
                  </thead>
                  <tbody>
                    @foreach ($pengguna as $key => $value)
                      <tr>
                        <td>
                          {{ $key + 1 }}
                        </td>
                        <td>
                          {{ $value->nama_pengguna }}
                        </td>
                        <td>
                          {{ $value->email }}
                        </td>
                        <td>
                          {{ $value->pengguna }}
                        </td>
                        <td>
                          {{-- <div class="row"> --}}
                            <a href="#" onclick="openModal({{ $value->id_pengguna }})" rel="tooltip" title="Lihat" class="btn btn-sm btn-success">
                              <i class="material-icons">zoom_out_map</i>
                            </a>
                            <a href="pengguna/{{ $value->id_pengguna }}/edit" rel="tooltip" title="Ubah" class="btn btn-sm btn-warning">
                              <i class="material-icons">edit</i>
                            </a>
                            <form action="/pengguna/{{ $value->id_pengguna }}" method="post">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-sm btn-danger"><i class="material-icons">close</i></button>
                            </form>
                          {{-- </div> --}}
                          {{-- <a href="#" id="deleteModal" onclick="deleteModal({{ $value->id_pengguna }})" data-id="{{ $value->id_pengguna }}" data-toggle="modal" data-target="#confirmModal" rel="tooltip" title="Hapus" class="btn btn-sm btn-danger">
                          <i class="material-icons">close</i></a> --}}
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <div class="card-avatar">
              <a href="#">
                <img class="img" src="/img/faces/marc.jpg" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category text-gray">Admin / pusat</h6>
              <h4 class="card-title">name</h4>
              <p class="card-description">
                Being honest may not get you a lot of friends but it’ll always get you the right ones..
              </p>
              <a href="#Hello" class="btn btn-primary btn-round">Hello</a>
            </div>
          </div>
          <div class="card card-profile">
            <div class="card-body">
              <h4 class="card-title">Tambah Pengguna</h4>
              <a href="pengguna/create" class="btn btn-info">Tambah</a>
              <p class="card-category">tambahkan pengguna baru kedalam daftar</p>
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
            <input type="hidden" id="id_admin" value="">
            <p>Apakah Anda yakin untuk menghapus pengguna ini..?</p>
          </div>
        </div>
        <div class="modal-footer">
          <button id="deleteButton" onclick="deletePengguna()" type="submit" class="btn btn-danger">Hapus</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div> --}}

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Info Pengguna</h5>
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
    url:"pengguna/get"+id,
    method: 'post',
    data:null
  }).done(function(data) {
    $('#modal-content').html(data);
    $('#exampleModalCenter').modal('show');
  });
}

function deleteModal(id) {
  $('#id_admin').val(id);
}

function deletePengguna(){
  var id = $('#id_admin').val();
  $.ajax({
    url:"pengguna/delete"+id,
    method: 'post',
    data:null
  }).done(function(data) {
    location.reload();
  });
}

</script> --}}

@endsection
