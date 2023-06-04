  <!-- Modal Edit -->
  <div class="modal fade" id="editDistributor{{ $item->id }}" tabindex="-1" aria-labelledby="editDistributorLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editDistributorLabel">
            Edit Data Distributor {{ $loop->iteration }}
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/distributor/{{ $item->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" value="{{ $item->nama }}" name="nama" />
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" value="{{ $item->email }}" name="email" />
            </div>

            <div class="form-group">
              <label for="no_wa">No Whatsapp</label>
              <input type="text" class="form-control" id="no_wa" value="{{ $item->no_wa }}" name="no_wa" />
            </div>

            <div class="form-group">
              <label for="kategori">Kategori</label>
              <select class="form-control" id="kategori" name="kategori">
                <option>- Kategori -</option>
                @foreach ($kategori as $kat)
                  @if ($kat['kategori'] == $item->kategori)
                    <option selected value="{{ $kat['kategori'] }}">{{ $kat['kategori'] }}</option>
                  @else
                    <option value="{{ $kat['kategori'] }}">{{ $kat['kategori'] }}</option>
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
