<div class="modal fade" id="editbarang{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Edit Barang {{ $loop->iteration }}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/barang/{{ $item->id }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->nama }}" />
          </div>
          <div class="form-group">
            <label for="jenis">Jenis Barang</label>
            <select class="form-control" id="jenis" name="jenis">
              <option>- Jenis Barang -</option>
              @foreach ($jenis as $x)
                @if ($x == $item->jenis)
                  <option value="{{ $x }}" selected>{{ $x }}</option>
                @else
                  <option value="{{ $x }}">{{ $x }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="harga">Harga Barang</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $item->harga }}" />
          </div>

          <div class="form-group">
            <label for="stok">Jumlah Barang</label>
            <input type="number" class="form-control" id="stok" name="stok" value="{{ $item->stok }}" />
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
