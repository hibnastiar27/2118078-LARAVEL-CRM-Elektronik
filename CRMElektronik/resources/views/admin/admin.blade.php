@extends('layouts.main')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid overflow-auto">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
      <a href="/admin/show" target="_blank" class="btn btn-sm btn-success d-flex align-items-center px-3">
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
        <h6 class="m-0 font-weight-bold text-primary">Data {{ $title }}</h6>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#admin">Tambah {{ $title }}</button>
        @include('admin.admin-entry')
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Whatsapp</th>
                <th>Alamat</th>
                {{-- <th>Status</th> --}}
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($admin as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->user->name }}</td>
                  <td>{{ $item->no_wa }}</td>
                  <td>{{ $item->alamat }}</td>
                  {{-- <td><span class="badge badge-info p-2">{{ $item->status }}</span></td> --}}
                  <td>
                    <!-- Action Edit -->
                    <span>
                      <!-- Button button Edit -->
                      <span type="button" class="badge badge-info py-2 px-4" data-toggle="modal" data-target="#editAdmin{{ $item->id }}">Edit</span>
                      <!-- Akhir button Edit -->

                      @include('admin.admin-edit')
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
                              <form action="/admin/{{ $item->id }}" method="post">
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

              {{-- <tr>
                <td>2</td>
                <td>Nessa Aulia Apriani</td>
                <td>081234567890</td>
                <td>JL. Tersesat</td>
                <td><span class="badge badge-danger p-2">DeActive</span></td>
                <td>
                  <!-- Action Edit -->
                  <span>
                    <!-- Button button Edit -->
                    <span type="button" class="badge badge-info py-2 px-4" data-toggle="modal" data-target="#editPelanggan2">
                      Edit
                    </span>
                    <!-- Akhir button Edit -->

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editPelanggan2" tabindex="-1" aria-labelledby="editPelangganLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editPelangganLabel">
                              Edit Data {{ $title }} 2
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label for="editNama2">Nama</label>
                                <input type="text" class="form-control" id="editNama2" value="Nessa Aulia Apriani" />
                              </div>
                              <div class="form-group">
                                <label for="editEmail2">Email</label>
                                <input type="email" class="form-control" id="editEmail2" value="081234567890" />
                              </div>
                              <div class="form-group">
                                <label for="editNoWa2">Password</label>
                                <input type="text" class="form-control" id="editNoWa2" value="JL. Tersesat" />
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                              Batal
                            </button>
                            <button type="button" class="btn btn-primary">
                              Ubah
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Akhir Modal Edit-->
                  </span>
                  <!-- Akhir Action Edit -->

                  <!-- Action Delete  -->
                  <span>
                    <span type="button" class="badge badge-danger mt-2 py-2 px-4" data-toggle="modal" data-target="#hapus2">
                      Delete
                    </span>
                    <div class="modal fade" id="hapus2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                              Hapus 2
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
                            <button type="button" class="btn btn-danger">
                              Hapus
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </span>
                  <!-- Akhir Action Delete -->
                </td>
              </tr>

              <tr>
                <td>3</td>
                <td>Rere Putri Kusuma</td>
                <td>081234567891</td>
                <td>Jl. Yang Masih Panjang</td>
                <td><span class="badge badge-info p-2">Active</span></td>
                <td>
                  <!-- Action Edit -->
                  <span>
                    <!-- Button button Edit -->
                    <span type="button" class="badge badge-info py-2 px-4" data-toggle="modal" data-target="#editPelanggan3">
                      Edit
                    </span>
                    <!-- Akhir button Edit -->

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editPelanggan3" tabindex="-1" aria-labelledby="editPelangganLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editPelangganLabel">
                              Edit Data {{ $title }} 3
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label for="editNama3">Nama</label>
                                <input type="text" class="form-control" id="editNama3" value="Rere Putri Kusuma" />
                              </div>
                              <div class="form-group">
                                <label for="editEmail3">Email</label>
                                <input type="email" class="form-control" id="editEmail3" value="081234567891" />
                              </div>
                              <div class="form-group">
                                <label for="editNoWa3">Password</label>
                                <input type="text" class="form-control" id="editNoWa3" value="Jl. Yang Masih Panjang" />
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                              Batal
                            </button>
                            <button type="button" class="btn btn-primary">
                              Ubah
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Akhir Modal Edit-->
                  </span>
                  <!-- Akhir Action Edit -->

                  <!-- Action Delete  -->
                  <span>
                    <span type="button" class="badge badge-danger mt-2 py-2 px-4" data-toggle="modal" data-target="#hapus3">
                      Delete
                    </span>
                    <div class="modal fade" id="hapus3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                              Hapus 3
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
                            <button type="button" class="btn btn-danger">
                              Hapus
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </span>
                  <!-- Akhir Action Delete -->
                </td>
              </tr> --}}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir Begin Page Content -->
@endsection
