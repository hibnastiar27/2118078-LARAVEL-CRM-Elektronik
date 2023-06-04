<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Tukar Poin
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/penukaran_poin" method="POST">
          @csrf
          <div class="form-group">
            <label for="pelanggan_id">Nama</label>
            <select class="form-control" id="pelanggan_id" name="pelanggan_id">
              <option selected>-- Pilih Nama --</option>
              @foreach ($pelanggan as $item)
                <option value="{{ $item->id }}">{{ $item->user->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="poin_id">Nama Poin</label>
            <select class="form-control" id="poin_id" name="poin_id">
              <option selected>-- Pilih Poin --</option>
              @foreach ($poin as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="tanggal">Tanggal Claim</label>
            <input type="datetime-local" class="form-control" id="tanggal" name="tanggal" />
          </div>

          <div class="form-group">
            <label for="status">Status</label>
            {{-- <input type="text" class="form-control" id="status" name="status" /> --}}
            <select class="form-control" id="status" name="status">
              <option selected>-- Status --</option>
              @foreach ($status as $item)
                <option value="{{ $item }}">{{ $item }}</option>
              @endforeach
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
