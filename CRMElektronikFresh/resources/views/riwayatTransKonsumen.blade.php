@extends('layouts.main')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid overflow-auto">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $title }} {{ $navTextItem }}</h1>
      <a href="/riwayat_trans_konsumen/show" target="_blank" class="btn btn-sm btn-success d-flex align-items-center px-3">
        <i class="fas fa-download fa-sm text-white-50 mr-2"></i>Generate Report
      </a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">
          Data Riwayat Transaksi Konsumen
        </h6>
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
              </tr>
            </thead>

            <tbody>
              {{-- @dd($transaksi) --}}
              @foreach ($transaksi as $item)
                @if ($item->user->role == 'konsumen')
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>
                      <span class="badge badge-danger mx-2">{{ $item->user->role }}</span>{{ $item->user->name }}
                    </td>
                    <td>{{ $item->barang->nama }}</td>
                    <td>{{ 'Rp.' . number_format($item->barang->harga, '2', ',', '.') }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ 'Rp.' . number_format($item->qty * $item->barang->harga, '2', ',', '.') }}</td>
                    <td>{{ $item->trans_poin }}</td>
                    <td>{{ $item->jenistransaksi->jenis }}</td>
                  </tr>
                @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir Begin Page Content -->
@endsection
