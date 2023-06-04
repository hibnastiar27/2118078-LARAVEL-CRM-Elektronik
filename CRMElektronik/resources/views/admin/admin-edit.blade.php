<!-- Modal Edit -->
<div class="modal fade" id="editAdmin{{ $item->id }}" tabindex="-1" aria-labelledby="editPelangganLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPelangganLabel">Edit Data {{ $title }} {{ $loop->iteration }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/admin/{{ $item->id }}" method="POST">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="user_id">Nama</label>
            {{-- <input type="text" class="form-control" id="editNama1" value="Nur Aria Hibnastiar" /> --}}
            <select class="form-control" name="user_id" id="user_id">
              <option>- Pilih Admin -</option>
              @foreach ($user as $i)
                @if ($i->role == 'admin')
                  @if ($i->id == $item->user_id)
                    <option selected value="{{ $i->id }}">{{ $i->name }}</option>
                  @else
                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                  @endif
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="no_wa">No Whatsapp</label>
            <input type="text" class="form-control" id="no_wa" value="{{ $item->no_wa }}" name="no_wa" />
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" value="{{ $item->alamat }}" name="alamat" />
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
