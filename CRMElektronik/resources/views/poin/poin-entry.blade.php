<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Tambah Poin
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/poin" method="POST">
          @csrf
          <div class="form-group">
            <label for="NamaPoin">Nama Poin</label>
            <input type="text" class="form-control" id="nama" name="nama" />
          </div>
          <div class="form-group">
            <label for="JumlahMinTrans">Minimal Jumlah Transaksi</label>
            <input type="number" class="form-control" id="min_trans" name="min_trans" />
          </div>
          <div class="form-group">
            <label for="BatasanUser">Batasan User</label>
            <input type="number" class="form-control" id="batasan" name="batasan" />
          </div>
          <div class="form-group">
            <label for="Nominal">Nominal</label>
            <input type="text" class="form-control" id="nominal" name="nominal" />
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Dateline</label>
            <input type="datetime-local" class="form-control" id="dateline" name="dateline" />
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            {{-- <input type="text" class="form-control" id="status" name="status" /> --}}
            <select class="form-control" name="status" id="status">
              <option selected>- Status -</option>
              @foreach ($status as $item)
                <option value="{{ $item }}">{{ $item }}</option>
              @endforeach
              {{-- <option value="Habis">Habis</option> --}}
              {{-- <option value="Expired">Expired</option> --}}
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              Close
            </button>
            <button type="submit" class="btn btn-primary">
              Tambah
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
