<!-- Modal Edit -->
<div class="modal fade" id="editPelanggan{{ $item->id }}" tabindex="-1" aria-labelledby="editPelangganLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPelangganLabel">
          Edit Data Konsumen {{ $loop->iteration }}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/konsumen/{{ $item->id }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="user_id">Nama</label>
            <select name="user_id" id="user_id" class="form-control">
              @foreach ($user as $u)
                @if ($u->role == 'konsumen')
                  @if ($u->id == $item->user->id)
                    <option value="{{ $u->id }}" selected>[{{ $u->role }}] --- {{ $u->name }}</option>
                  @else
                    <option value="{{ $u->id }}">[{{ $u->role }}] --- {{ $u->name }}</option>
                  @endif
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="no_wa">No Whatsapp</label>
            <input type="text" class="form-control" id="no_wa" value="{{ $item->no_wa }}" name="no_wa" />
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
