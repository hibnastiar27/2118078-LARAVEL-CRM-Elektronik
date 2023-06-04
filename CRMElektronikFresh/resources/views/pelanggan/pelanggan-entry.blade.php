<!-- Modal Tambah Data -->
<div class="modal fade" id="addDataPelanggan" tabindex="-1" aria-labelledby="addDataPelangganLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addDataPelangganLabel">
          Tambah Data Pelanggan
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pelanggan" method="POST">
          @csrf
          <div class="form-group">
            <label for="user_id">Nama</label>
            {{-- <input type="text" class="form-control" id="nama" name="nama" /> --}}
            <select name="user_id" id="user_id" class="form-control" required>
              <option>-Pilih Pelanggan-</option>
              @foreach ($user as $u)
                @if ($u->role == 'pelanggan')
                  <option value="{{ $u->id }}">{{ $u->name }}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="no_wa">No Whatsapp</label>
            <input type="text" class="form-control" id="no_wa"name="no_wa" required />
          </div>
          <div class="form-group">
            <label for="jumlah_transaksi">Jumlah Poin</label>
            <input type="text" class="form-control" id="jumlah_transaksi" name="jumlah_transaksi" required />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- Akhir Modal Tambah Data  -->
