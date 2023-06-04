@extends('layouts.main')

@section('container')
  <!-- Begin Page Content -->

  <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Poin</h1>

      <a href="/poin/show" target="_blank" class="btn btn-sm btn-success d-flex align-items-center px-3">
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
        <h6 class="m-0 font-weight-bold text-primary">Data Poin</h6>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Tambah Poin
        </button>
        @include('poin.poin-entry')
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>

              <tr>
                <th>No</th>
                <th>Nama Poin</th>
                <th>Jumlah Minimal Poin</th>
                <th>Batasan</th>
                <th>Nominal / Persen</th>
                <th>Dateline</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($poin as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->min_trans }}</td>
                  <td>{{ $item->batasan }}</td>
                  <td>{{ 'Rp. ' . $item->nominal }}</td>
                  <td>{{ $item->dateline }}</td>
                  @if ($item->status == 'Berfungsi')
                    <td><span class="badge badge-success p-2">{{ $item->status }}</span></td>
                  @elseif($item->status == 'Habis')
                    <td><span class="badge badge-secondary p-2">{{ $item->status }}</span></td>
                  @elseif($item->status == 'Expired')
                    <td><span class="badge badge-danger p-2">{{ $item->status }}</span></td>
                  @endif
                  <td>
                    <!-- Action Edit -->
                    <span>
                      <!-- Button button Edit -->
                      <span type="button" class="badge badge-info py-2 px-4" data-toggle="modal" data-target="#editPoin{{ $item->id }}">
                        Edit
                      </span>
                      <!-- Akhir button Edit -->
                      @include('poin.poin-edit')
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
                              <form action="/poin/{{ $item->id }}" method="post">
                                @method('DELETE')
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
