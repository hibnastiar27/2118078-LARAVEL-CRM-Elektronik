<!DOCTYPE html>
<html>

<head>
  <title>Report Data User</title>
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap");

    * {
      padding: 0;
      margin: 0;
      font-family: "Plus Jakarta Sans", sans-serif;
    }

    table tr td,
    table tr th {
      font-size: 9pt;
    }

    thead {
      background-color: rgb(78, 115, 223);
      color: white
    }

    span.primary {
      background-color: rgb(78, 115, 223);
    }
  </style>
</head>

<body>

  <div class="box">
    <div class="box-item float-left">
      <p style="font-size: 1.5rem; font-weight: bold"> <span class="primary px-3 py-2 rounded-circle text-white">CRM</span> ELEKTRONIK</p>
    </div>
    <div class="box-item text-right">
      <p style="font-size: 1.5rem; font-weight: bold">Data User</p>
      <p style="font-size: 0.8rem">{{ $carbon }}</p>
    </div>
  </div>

  <hr style="border: 2px solid black">

  <table class='table table-bordered'>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>Role</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($user as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->email }}</td>
          <td>{{ Hash::make($item->password) }}</td>
          <td>
            @if ($item->role == 'admin')
              <span class="badge badge-success p-2">{{ $item->role }}</span>
            @elseif($item->role == 'pelanggan')
              <span class="badge badge-primary p-2">{{ $item->role }}</span>
            @else
              <span class="badge badge-danger p-2">{{ $item->role }}</span>
            @endif
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {{-- <td>{{ 'Rp. ' . number_format($p->harga, 2, ',', '.') }}</td> --}}
</body>

</html>
