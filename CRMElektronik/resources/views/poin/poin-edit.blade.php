<!-- Modal Edit -->
<div class="modal fade" id="editPoin{{ $item->id }}" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editLabel">
          Edit Data Konsumen 1
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/poin/{{ $item->id }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="poin">Nama Poin</label>
            <input type="text" class="form-control" id="poin" value="{{ $item->nama }}" name="nama" />
          </div>

          <div class="form-group">
            <label for="min_trans">Minimal Jumlah Transaksi</label>
            <input type="number" class="form-control" id="min_trans" value="{{ $item->min_trans }}" name="min_trans" />
          </div>

          <div class="form-group">
            <label for="batasan">Batasan User</label>
            <input type="number" class="form-control" id="batasan" value="{{ $item->batasan }}" name="batasan" />
          </div>

          <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="text" class="form-control" id="nominal" value="{{ $item->nominal }}" name="nominal" />
          </div>

          <div class="form-group">
            <label for="dateline">Dateline</label>
            <input type="datetime-local" class="form-control" id="dateline" value="{{ $item->dateline }}" name="dateline" />
          </div>

          <div class="form-group">
            <label for="status">Status</label>
            {{-- <input type="text" class="form-control" id="status" value="{{ $item->status }}" name="status" /> --}}
            <select class="form-control" name="status" id="status">
              <option>- Status -</option>
              @foreach ($status as $stat)
                @if ($item->status == $stat)
                  <option selected value="{{ $stat }}">{{ $stat }}</option>
                @else
                  <option value="{{ $stat }}">{{ $stat }}</option>
                @endif
              @endforeach
              {{-- <option value="Berfungsi">Berfungsi</option> --}}
              {{-- <option value="Habis">Habis</option> --}}
              {{-- <option value="Expired">Expired</option> --}}
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- Akhir Modal Edit-->
