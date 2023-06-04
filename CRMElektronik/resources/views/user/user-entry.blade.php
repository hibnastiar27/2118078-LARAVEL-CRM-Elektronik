<!-- Modal -->
<div class="modal fade" id="user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data {{ $title }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/user" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" />
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" />
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" />
          </div>

          <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" name="role" id="role">
              <option>- Pilih Role -</option>
              @foreach ($role as $r)
                <option value="{{ $r }}">{{ $r }}</option>
              @endforeach
            </select>
            {{-- <input type="text" class="form-control" id="editNoWa1" value="{{ $item->role }}" /> --}}
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
