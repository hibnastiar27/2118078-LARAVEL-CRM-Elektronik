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
        <form action="/penukaran_poin/{{ $item->id }}" method="POST">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="pelanggan_id">Nama</label>
            <select class="form-control" id="pelanggan_id" name="pelanggan_id">
              <option>-- Pilih Nama --</option>
              @foreach ($pelanggan as $pel)
                @if ($pel->id == $item->pelanggan_id)
                  <option selected value="{{ $pel->id }}">{{ $pel->user->name }}</option>
                @else
                  <option value="{{ $pel->id }}">{{ $pel->user->name }}</option>
                @endif
              @endforeach
              {{-- <option>Nessa Aulia Apriani</option> --}}
              {{-- <option>Rere Putri Kusuma</option> --}}
            </select>
          </div>

          <div class="form-group">
            <label for="poin_id">Nama Poin</label>
            <select class="form-control" id="poin_id" name="poin_id">
              <option>-- Pilih Poin --</option>
              @foreach ($poin as $x)
                @if ($x->id == $item->poin_id)
                  <option selected value="{{ $x->id }}">{{ $x->nama }}</option>
                @else
                  <option value="{{ $x->id }}">{{ $x->nama }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="tanggal">Tanggal Claim</label>
            <input type="datetime-local" class="form-control" id="tanggal" value="{{ $item->tanggal }}" name="tanggal" />
          </div>

          <div class="form-group">
            <label for="status">Status</label>
            {{-- <input type="text" class="form-control" id="status" value="{{ $item->status }}" name="status" /> --}}
            <select class="form-control" id="status" name="status">
              <option>-- Status --</option>
              @foreach ($status as $stat)
                @if ($stat == $item->status)
                  <option selected value="{{ $stat }}">{{ $stat }}</option>
                @else
                  <option value="{{ $stat }}">{{ $stat }}</option>
                @endif
              @endforeach
            </select>
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
