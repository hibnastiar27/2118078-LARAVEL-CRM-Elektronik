<!-- Modal Edit -->
<div class="modal fade" id="editPelanggan{{ $item->id }}" tabindex="-1" aria-labelledby="editPelangganLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPelangganLabel">
          Edit Data Pelanggan {{ $loop->iteration }}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pelanggan/{{ $item->id }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="editNama1">Nama</label>
            {{-- <input type="text" class="form-control" id="editNama1" value="{{ $item->nama }}" name="nama" /> --}}
            <select name="user_id" id="nama" class="form-control">
              <option>-Pilih Pelanggan-</option>
              @foreach ($user as $u)
                @if ($u->role == 'pelanggan')
                  @if ($u->id == $item->user->id)
                    <option selected value="{{ $u->id }}">{{ $u->name }}</option>
                  @else
                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                  @endif
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="editNoWa1">No Whatsapp</label>
            <input type="text" class="form-control" id="editNoWa1" value="{{ $item->no_wa }}" name="no_wa" />
          </div>
          <div class="form-group">
            <label for="editJumTrans1">Jumlah Poin</label>
            <input type="text" class="form-control" id="editJumTrans1" value="{{ $item->jumlah_transaksi }}" name="jumlah_transaksi" />
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
