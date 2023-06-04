<!-- Modal -->
<div class="modal fade" id="balas{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Edit Balasan {{ $loop->iteration }}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/saran_kritik/{{ $item->id }}" method="post">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="balasan">Edit Balasan Anda</label>
            <input style="display: none" name="sarankritik_id" value="{{ $item->id }}">
            <textarea class="form-control" id="balasan" rows="3" name="balasan">{{ $item->balasan }}</textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
