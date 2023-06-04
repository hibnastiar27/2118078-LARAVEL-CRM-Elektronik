<div class="modal fade" id="EDITjenistransaksi{{ $item->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Edit Jenis Transaksi {{ $loop->iteration }}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="editpage{{ $item->id }}">
        <form action="/jenis_transaksi/{{ $item->id }}" method="post">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="jenistrans">Jenis Transaksi</label>
            <input type="text" class="form-control" value="{{ $item->jenis }}" id="jenistrans" name="jenistrans" />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
