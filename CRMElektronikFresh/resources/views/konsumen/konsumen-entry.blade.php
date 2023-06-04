<!-- Modal -->
<div class="modal fade" id="konsumen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Tambah Data Konsumen
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/konsumen" method="POST">
          @csrf
          <div class="form-group">
            <label for="user_id">Nama</label>
            <select name="user_id" id="user_id" class="form-control" required>
              @foreach ($user as $u)
                @if ($u->role == 'konsumen')
                  <option value="{{ $u->id }}"> {{ $u->name }}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="no_wa">No Whatsapp</label>
            <input type="number" class="form-control" id="no_wa" name="no_wa" required />
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
