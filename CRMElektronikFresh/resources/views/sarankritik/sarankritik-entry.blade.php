<!-- Modal -->
<div class="modal fade" id="kisar{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Balas Saran Kritik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/saran_kritik" method="post">
          @csrf
          <div class="form-group">
            <label for="email">Email Tujuan</label>
            <input style="display: none" value="{{ $item->id }}" name="sarankritik_id">
            <input type="email" class="form-control" id="email" value="{{ $item->email }}" disabled>
          </div>

          <div class="form-group">
            <label for="balasan">Masukan Balasan Anda</label>
            <textarea class="form-control" id="balasan" rows="3" name="balasan"></textarea>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Balas</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
