<!DOCTYPE html>
<html lang="en">
<!-- Awal Head -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

  <title>{{ $title }} CRM</title>
  {{-- ?link icon  --}}
  <link href="styleAdmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  {{-- ?Akhir link icon --}}

  {{-- ?Link Font  --}}
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  {{-- ?Akhir Link font  --}}

  {{-- ?link custom css  --}}
  <link href="styleAdmin/css/sb-admin-2.min.css" rel="stylesheet" />
  <link href="styleAdmin/css/editColor.css" rel="stylesheet" />
  <link href="styleAdmin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  {{-- ?akhir link custom css  --}}

  {{-- ?Selection  --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<!-- Akhir Head -->

<!-- Body -->

<body id="page-top">
  <!-- Wrapper -->
  <div id="wrapper">
    @include('layouts.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        @include('layouts.navbar')
        @yield('container')


      </div>
      <!-- End of Main Content -->

      @include('layouts.footer')


    </div>
    <!-- Akhir Wrapper -->
  </div>
  <!-- Akhir Wrapper -->

  <!-- Scroll top-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Akhir Scrol Top -->

  <!-- Logout Modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Select "Logout" below if you are ready to end your current session.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <a class="btn btn-primary" href="/login">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Logout Modal -->

  {{-- ? Link JS  --}}
  {{-- jquery --}}

  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="styleAdmin/vendor/jquery/jquery.min.js"></script>
  <script src="styleAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="styleAdmin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="styleAdmin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="styleAdmin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="styleAdmin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="styleAdmin/js/demo/datatables-demo.js"></script>

  {{-- <script src="styleAdmin/jenistransaksi.js"></script> --}}
  {{-- <script src="styleAdmin/jenistransaksi.js"></script> --}}

  <!-- custom -->
  {{-- <script>
    $(document).ready(function() {
      var multipleCancelButton = new Choices(
        "#choices-multiple-remove-button", {
          removeItemButton: true,
          maxItemCount: null,
          searchResultLimit: null,
          renderChoiceLimit: null,
        }
      );
    });
  </script> --}}

  @yield('script')
  {{-- <script>
    function create() {
      $.get("{{ url('/jenis_transaksi/create') }}", {}, function(data, status) {
        $("#page").html(data);
        $("#barang").modal("show");
      });
    }

    function store() {
      var jenistrans = $("#jenistrans").val();
      $.ajax({
        type: "get",
        url: "{{ url('/jenis_transaksi/store') }}",
        data: "jenistrans=" + jenistrans,
        success: function(data) {
          $(".close").click();
          location.reload(true);
        },
      });
    }

    function show(id) {
      $.get(
        "{{ url('/jenis_transaksi/show') }}/" + id, {},
        function(data, status) {
          $("#editpage").html(data);
          $("#editbarang").modal("show");
        }
      );
    }

    function update(id) {
      var jenistrans = $("#jenistrans").val();
      $.ajax({
        type: "get",
        url: "{{ url('/jenis_transaksi/update') }}/" + id,
        data: "jenistrans=" + jenistrans,
        success: function(data) {
          $(".close.update").click();
          location.reload(true);
        },
      });
    }

    function destroy(id) {
      $.ajax({
        type: "get",
        url: "{{ url('/jenis_transaksi/destroy') }}/" + id,
        success: function(data) {
          $(".close.delete").click();
          location.reload(true);
        },
      });
    }
  </script> --}}

  <script>
    window.setTimeout(() => {
      $("#flash_data").slideUp(500, () => {
        $(this).remove();
      });;
    }, 2000);
  </script>
  {{-- ? AkhirLink JS  --}}
</body>
<!-- Akhir Body -->

</html>
