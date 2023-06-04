@extends('layouts.main')

@section('container')
  {{-- Begin Page Content --}}
  <div class="container-fluid overflow-auto">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>

      <a href="/pelanggan/show" target="_blank" class="btn btn-sm btn-success d-flex align-items-center px-3">
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
        <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
        <!-- btn Tambah data -->
        <div>
          <!-- Button Tambah Data -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDataPelanggan">Tambah Pelanggan</button>
          <!-- Akhir Button Tambah Data -->
          @include('pelanggan.pelanggan-entry')
        </div>
        <!-- Akhir btn Tambah data -->
      </div>

      <div class="card-body">
        <!-- Data Tabel Pelanggan -->
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>No Whatsapp</th>
                <th>Jumlah Poin</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($pelanggan as $item)
                {{-- @dd($item->jumlah_transaksi) --}}
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->user->name }}</td>
                  <td>{{ $item->user->email }}</td>
                  <td>{{ $item->no_wa }}</td>
                  <td>{{ $item->jumlah_transaksi }}</td>
                  <td>
                    <!-- Action Edit -->
                    <span>
                      <!-- Button button Edit -->
                      <span type="button" class="badge badge-info py-2 px-4" data-toggle="modal" data-target="#editPelanggan{{ $item->id }}">Edit</span>
                      <!-- Akhir button Edit -->
                      @include('pelanggan.pelanggan-edit')
                    </span>
                    <!-- Akhir Action Edit -->

                    <!-- Action Delete  -->
                    <span>
                      <span type="button" class="badge badge-danger mt-2 py-2 px-4" data-toggle="modal" data-target="#hapus">Delete</span>
                      <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Hapus {{ $loop->iteration }}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <h5>Anda Yakin Ingin Menghapus?</h5>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                              <form action="/pelanggan/{{ $item->id }}" method="post">
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
        <!-- Akhir Data Tabel Pelanggan -->
      </div>
    </div>
  </div>
  {{-- Akhir Begin Page Content --}}
@endsection


{{-- @section('script')
@endsection --}}
