<!-- Modal -->
<div class="modal fade" id="barang" tabindex="-1" aria-labelledby="barangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="barangLabel">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="page">
        <form action="/barang" method="POST">
          @csrf
          <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" />
          </div>

          <div class="form-group">
            <label for="jenis">Jenis Barang</label>
            <select class="form-control" id="jenis" name="jenis">
              <option selected>- Jenis Barang-</option>
              @foreach ($jenis as $x)
                <option value="{{ $x }}">{{ $x }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="harga">Harga Barang</label>
            <input type="number" class="form-control" id="harga" name="harga" />
          </div>

          <div class="form-group">
            <label for="stok">Stok Barang</label>
            <input type="number" class="form-control" id="stok" name="stok" />
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
