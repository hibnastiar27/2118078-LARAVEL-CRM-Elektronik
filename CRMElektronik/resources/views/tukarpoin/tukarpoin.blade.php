@extends('layouts.main')

@section('container')
  <!-- Begin Page Content -->

  <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $navTextItem }}</h1>
      <a href="/penukaran_poin/show" target="_blank" class="btn btn-sm btn-success d-flex align-items-center px-3">
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
        <h6 class="m-0 font-weight-bold text-primary">
          Data Penukaran Poin
        </h6>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Tukar Poin
        </button>

        @include('tukarpoin.tukarpoin-entry')
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Nama Poin</th>
                <th>Tanggal Claim</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($tukarpoin as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->pelanggan->user->name }}</td>
                  <td>{{ $item->poin->nama }}</td>
                  <td>{{ $item->tanggal }}</td>
                  <td>
                    <span class="badge badge-success p-2">{{ $item->status }}</span>
                  </td>
                  <td>
                    <!-- Action Edit -->
                    <span>
                      <!-- Button button Edit -->
                      <span type="button" class="badge badge-info py-2 px-4" data-toggle="modal" data-target="#editPelanggan{{ $item->id }}">
                        Edit
                      </span>
                      <!-- Akhir button Edit -->
                      @include('tukarpoin.tukarpoin-edit')
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
                                Hapus 1
                              </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <h5>Anda Yakin Ingin Menghapus?</h5>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                              <form action="/penukaran_poin/{{ $item->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
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
