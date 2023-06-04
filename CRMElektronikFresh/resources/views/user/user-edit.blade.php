<!-- Modal Edit -->
<div class="modal fade" id="useredit{{ $item->id }}" tabindex="-1" aria-labelledby="editPelangganLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPelangganLabel">
          Edit Data {{ $title }} {{ $loop->iteration }}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/user/{{ $item->id }}" method="POST">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" value="{{ $item->name }}" name="name" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value="{{ $item->email }}" name="email" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" value="{{ $item->password }}" name="password" />
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" name="role" id="role">
              <option>- Pilih Role -</option>
              @foreach ($role as $r)
                @if ($r == $item->role)
                  <option selected value="{{ $r }}">{{ $r }}</option>
                @else
                  <option value="{{ $r }}">{{ $r }}</option>
                @endif
              @endforeach
            </select>
            {{-- <input type="text" class="form-control" id="editNoWa1" value="{{ $item->role }}" /> --}}
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
