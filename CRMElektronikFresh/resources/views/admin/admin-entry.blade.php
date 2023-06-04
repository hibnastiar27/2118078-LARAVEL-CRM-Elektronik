<!-- Modal -->
<div class="modal fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Tambah Data {{ $title }}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/admin" method="POST">
          @csrf
          <div class="form-group">
            <label for="user_id">Nama</label>
            {{-- <input type="text" class="form-control" id="user_id" /> --}}
            <select class="form-control" name="user_id" id="user_id">
              <option>- Pilih Admin -</option>
              @foreach ($user as $item)
                @if ($item->role == 'admin')
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endif
                {{-- <option>Belum Ada Admin</option> --}}
                {{-- @else --}}
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="no_wa">No Whatsapp</label>
            <input type="text" class="form-control" id="no_wa" name="no_wa" />
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" />
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
