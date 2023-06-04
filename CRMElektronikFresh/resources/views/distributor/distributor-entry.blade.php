<!-- Modal -->
<div class="modal fade" id="distributorModal" tabindex="-1" aria-labelledby="distributorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="distributorModalLabel">
          Tambah Distributor
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/distributor">
          @csrf
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" />
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" />
          </div>

          <div class="form-group">
            <label for="no_wa">No Whatsapp</label>
            <input type="text" class="form-control" id="no_wa" name="no_wa" />
          </div>
          {{-- @foreach ($kategori as $kat)
            @dd($kat['kategori'], $kat['id'])
          @endforeach --}}
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="kategori" name="kategori">
              <option>- Kategori -</option>
              @foreach ($kategori as $kat)
                <option value="{{ $kat['kategori'] }}">{{ $kat['kategori'] }}</option>
              @endforeach
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              Close
            </button>
            <button type="submit" class="btn btn-primary">
              Tambah Data
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
