@extends('layouts.main')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid overflow-auto">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Jenis {{ $title }}</h1>
    </div>

    <div id="flash_data">
      @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          <div>{{ session('success') }}</div>
        </div>
      @elseif(session()->has('update'))
        <div class="alert alert-warning" role="alert">
          <div>{{ session('update') }}</div>
        </div>
      @elseif(session()->has('delete'))
        <div class="alert alert-danger" role="alert">
          <div>{{ session('delete') }}</div>
        </div>
      @endif
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Data Jenis Transaksi</h6>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jenistransaksi">Tambah Jenis Transaksi</button>
        @include('jenistransaksi.jenistransaksi-entry')
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Jenis Transaksi</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($jenistransaksi as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->jenis }}</td>
                  <td>
                    <!-- Action Edit -->
                    <span>
                      <!-- Button button Edit -->
                      <button type="button" class="badge badge-info py-2 px-4 border-0" data-toggle="modal" data-target="#EDITjenistransaksi{{ $item->id }}">Edit</button>
                      @include('jenistransaksi.jenistransaksi-edit')
                    </span>
                    <!-- Akhir Action Edit -->

                    <!-- Action Delete  -->
                    <span>
                      <button type="button" class="badge badge-danger py-2 px-4 border-0" data-toggle="modal" data-target="#hapus{{ $item->id }}">Hapus</button>
                      <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Hapus {{ $loop->iteration }}
                              </h5>
                              <button type="button" class="close delete" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <h5>Anda Yakin Ingin Menghapus?</h5>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Batal
                              </button>
                              <form action="/jenis_transaksi/{{ $item->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="sumbit" class="btn btn-danger">Hapus</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <!-- Akhir Action Delete -->
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir Begin Page Content -->
@endsection


{{-- @section('script')
  <script type="text/javascript">
    function create() {
      $.get("{{ url('/jenis_transaksi/create') }}", {}, function(data, status) {
        $("#page").html(data);
        $("#barang").modal("show");
      });
    }

    function store() {
      var jenistrans = $("#jenistrans").val();
      $.ajax({
        type: "get",
        url: "{{ url('/jenis_transaksi/store') }}",
        data: "jenistrans=" + jenistrans,
        success: function(data) {
          $(".close").click();
          // location.reload(true);
        },
      });
    }

    function show(id) {
      $.get(
        "{{ url('/jenis_transaksi/show') }}/" + id, {},
        function(data, status) {
          $("#editpage" + id).html(data);
          $("#editbarang" + id).modal("show");
        }
      );
    }

    function update(id) {
      var jenistrans = $("#jenistrans").val();
      $.ajax({
        type: "get",
        url: "{{ url('/jenis_transaksi/update') }}/" + id,
        data: "jenistrans=" + jenistrans,
        success: function(data) {
          $(".close.update").click();
          location.reload(true);
        },
      });
    }

    function destroy(id) {
      $.ajax({
        type: "get",
        url: "{{ url('/jenis_transaksi/destroy') }}/" + id,
        success: function(data) {
          $(".close.delete").click();
          location.reload(true);
        },
      });
    }
  </script>
@endsection --}}
