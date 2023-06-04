<!-- Modal -->
<div class="modal fade" id="addtransaksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi Penjualan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/transaksi" method="post">
          @csrf
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required />
          </div>

          <div class="form-group">
            <label for="user_id">Nama</label>
            {{-- <input type="text" class="form-control" id="nama" name="nama" /> --}}
            <select class="form-control" id="user_id" name="user_id" required>
              <option selected>-- Pilih User --</option>
              @foreach ($user as $u)
                @if ($u->role == 'pelanggan' or $u->role == 'konsumen')
                  <option value="{{ $u->id }}">
                    [{{ $u->role }}] --- {{ $u->name }}
                  </option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="barang_id">Barang</label>
            <select class="form-control" id="barang_id" name="barang_id" required>
              <option selected>-- Pilih Barang --</option>
              @foreach ($barang as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="hargaBarang" name="harga" disabled />
          </div>

          <div class="form-group">
            <label for="qty">Qty</label>
            <input type="number" class="form-control" id="qty" name="qty" required />
          </div>

          <div class="form-group">
            <label for="trans_poin">Poin Transaksi</label>
            <input type="number" class="form-control" id="trans_poin" name="trans_poin" required />
          </div>

          <div class="form-group">
            <label for="jenistransaksi_id">Jenis Transaksi</label>
            <select class="form-control" id="jenistransaksi_id" name="jenistransaksi_id" required>
              <option selected>-- Pilih Jenis Transaksi --</option>
              @foreach ($jenistransaksi as $item)
                <option value="{{ $item->id }}">{{ $item->jenis }}</option>
              @endforeach
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
