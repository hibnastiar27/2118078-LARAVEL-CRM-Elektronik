@extends('layouts.main')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-4 text-gray-800">Saran Kritik</h1>
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
        <h6 class="m-0 font-weight-bold text-primary">Data Saran Kritik</h6>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Saran Kritik</th>
                <th>Tanggal</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              {{-- @dd($kisar) --}}
              @foreach ($kisar as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->isi }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>
                    <span>
                      <!-- Button trigger modal -->
                      <span type="button" class="badge badge-success mt-2 py-2 px-4" data-toggle="modal" data-target="#kisar{{ $item->id }}">Balas</span>
                      @include('sarankritik.sarankritik-entry')
                    </span>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Data Balas Saran Kritik</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Kepada (email)</th>
                <th>Balasan</th>
                <th>Tanggal</th>
                <th>Action</th>
              </tr>

            </thead>

            <tbody>
              @foreach ($balas as $item)
                {{-- @dd($balas) --}}
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->sarankritik->email }}</td>
                  <td>{{ $item->balasan }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>
                    <span>
                      <!-- Button trigger modal -->
                      <span type="button" class="badge badge-info mt-2 py-2 px-4" data-toggle="modal" data-target="#balas{{ $item->id }}">Edit</span>
                      @include('sarankritik.sarankritik-edit')
                    </span>

                    <!-- Action Delete  -->
                    <span>
                      <span type="button" class="badge badge-danger mt-2 py-2 px-4" data-toggle="modal" data-target="#hapus{{ $item->id }}">Delete</span>
                      <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Batal
                              </button>
                              <form action="/saran_kritik/{{ $item->id }}" method="post">
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
