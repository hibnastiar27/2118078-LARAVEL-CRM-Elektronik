@extends('layouts.main')

@section('container')
  {{-- @dd($transaksi) --}}
  <!-- Begin Page Content -->
  <div class="container-fluid overflow-auto">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $title }} Penjualan</h1>
      <a href="/transaksi/show" target="_blank" class="btn btn-sm btn-success d-flex align-items-center px-3">
        <i class="fas fa-download fa-sm text-white-50 mr-2"></i>Generate Report
      </a>
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
        <h6 class="m-0 font-weight-bold text-primary">Data Transaksi Penjualan</h6>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addtransaksi">Tambah Transaksi</button>

        @include('transaksi.transaksi-entry')
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>List Barang</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Total Harga</th>
                <th>Jumlah Poin</th>
                <th>Jenis Transaksi</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($transaksi as $item)
                {{-- @dd($item) --}}
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->tanggal }}</td>
                  <td>
                    @if ($item->user->role == 'pelanggan')
                      <span class="badge badge-primary">{{ $item->user->role }}</span>
                    @else()
                      <span class="badge badge-danger">{{ $item->user->role }}</span>
                    @endif <br>
                    {{ $item->user->name }}
                  </td>
                  <td>
                    {{-- <ol class="m-0 pl-3"> --}}
                    {{ $item->barang->nama }}
                  </td>
                  <td>{{ 'Rp.' . number_format($item->barang->harga, '2', ',', '.') }}</td>
                  <td>{{ $item->qty }}</td>
                  <td>{{ 'Rp.' . number_format($item->qty * $item->barang->harga, '2', ',', '.') }}</td>
                  <td>{{ $item->trans_poin }}</td>
                  <td>{{ $item->jenistransaksi->jenis }}</td>
                  <td>
                    <!-- Action Edit -->
                    <span>
                      <!-- Button button Edit -->
                      <span type="button" class="badge badge-info py-2 px-4" data-toggle="modal" data-target="#EDITtransaksi{{ $item->id }}">
                        Edit
                      </span>
                      <!-- Akhir button Edit -->
                      @include('transaksi.transaksi-edit')
                    </span>
                    <!-- Akhir Action Edit -->

                    <!-- Action Delete  -->
                    <span>
                      <span type="button" class="badge badge-danger mt-2 py-2 px-4" data-toggle="modal" data-target="#hapus">
                        Delete
                      </span>
                      <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Hapus {{ $loop->iteration }}
                              </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                              <form action="/transaksi/{{ $item->id }}" method="post">
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


@section('script')
  <script>
    $(document).ready(function() {
      $('#barang_id').on('change', function() {
        var barang_id = $(this).val();

        if (barang_id) {
          $.ajax({
            type: "get",
            url: "/transaksi/barang/" + barang_id,
            data: {
              '_token': '{{ csrf_token() }}'
            },
            dataType: "json",
            success: function(data) {
              var a = data[0]
              $.each(a, function(indexInArray, valueOfElement) {
                if (indexInArray == 'harga') {
                  console.log(valueOfElement);
                  $('#hargaBarang').val(valueOfElement)
                  // $('#edithargaBarang').val(valueOfElement)
                }
              });
            }
          });
        }
      });
    });
  </script>

  {{-- <script>
    $(document).ready(function() {
      $('#editbarang_id').on('change', function() {
        var barang_id = $(this).val();

        if (barang_id) {
          $.ajax({
            type: "get",
            url: "/transaksi/barang/" + barang_id,
            data: {
              '_token': '{{ csrf_token() }}'
            },
            dataType: "json",
            success: function(data) {
              var a = data[0]
              $.each(a, function(indexInArray, valueOfElement) {
                if (indexInArray == 'harga') {
                  console.log(valueOfElement);
                  $('#hargaBarang').val(valueOfElement)
                }
              });
            }
          });
        }
      });
    });
  </script> --}}
@endsection
