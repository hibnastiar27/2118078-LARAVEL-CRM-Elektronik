<!-- Modal Edit -->
<div class="modal fade" id="EDITtransaksi{{ $item->id }}" tabindex="-1" aria-labelledby="editBarangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editDistributorLabel">
          Edit Transaksi {{ $loop->iteration }}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/transaksi/{{ $item->id }}" method="post">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $item->tanggal }}" />
          </div>

          <div class="form-group">
            {{-- <label for="nama">Nama</label> --}}
            {{-- <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->nama }}" /> --}}

            <label for="user_id">Nama</label>
            <select class="form-control" id="user_id" name="user_id">
              <option selected>-- Pilih User --</option>
              @foreach ($user as $u)
                @if ($u->role == 'pelanggan' or $u->role == 'konsumen')
                  @if ($u->id == $item->user->id)
                    <option value="{{ $u->id }}" selected>
                      [{{ $u->role }}] --- {{ $u->name }}
                    </option>
                  @else
                    <option value="{{ $u->id }}">[{{ $u->role }}] --- {{ $u->name }}</option>
                  @endif
                @endif
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="editbarang">Barang</label>
            <select class="form-control" id="editbarang" name="barang_id">
              <option selected>-- Pilih Barang --</option>
              @foreach ($barang as $x)
                @if ($x->id == $item->barang_id)
                  <option value="{{ $x->id }}" selected>{{ $x->nama }} -> {{ $x->harga }}</option>
                @else
                  <option value="{{ $x->id }}">{{ $x->nama }} -> {{ $x->harga }}</option>
                @endif
              @endforeach
            </select>
          </div>

          {{-- <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="edithargaBarang{{ $item->id }}" name="harga" disabled value="{{ $item->barang->harga }}" />
          </div> --}}

          <div class="form-group">
            <label for="qty">Qty</label>
            <input type="number" class="form-control" id="qty" name="qty" value="{{ $item->qty }}" />
          </div>

          <div class="form-group">
            <label for="trans_poin">Poin Transaksi</label>
            <input type="number" class="form-control" id="trans_poin" name="trans_poin" value="{{ $item->trans_poin }}" />
          </div>

          <div class="form-group">
            <label for="jenistransaksi_id">Jenis Transaksi</label>
            <select class="form-control" id="jenistransaksi_id" name="jenistransaksi_id">
              <option selected>-- Pilih Jenis Transaksi --</option>
              @foreach ($jenistransaksi as $a)
                @if ($a->id == $item->jenistransaksi_id)
                  <option value="{{ $a->id }}" selected>{{ $a->jenis }}</option>
                @else
                  <option value="{{ $a->id }}">{{ $a->jenis }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Edit-->
