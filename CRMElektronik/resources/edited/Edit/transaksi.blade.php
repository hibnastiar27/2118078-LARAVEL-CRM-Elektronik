<!DOCTYPE html>
<html lang="en">
    <!-- Awal Head -->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Home CRM</title>

        <!-- ?link icon -->
        <link
            href="../vendor/fontawesome-free/css/all.min.css"
            rel="stylesheet"
            type="text/css"
        />
        <!-- ?Akhir link icon -->

        <!-- ?Link Font -->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"
        />
        <!-- ?Akhir Link font -->

        <!-- ?link custom css -->
        <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
        <link href="../css/editColor.css" rel="stylesheet" />
        <!-- ?akhir link custom css -->

        <!-- Selection -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css"
        />
        <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    </head>
    <!-- Akhir Head -->

    <!-- Body -->
    <body id="page-top">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul
                class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
                id="accordionSidebar"
            >
                <!-- Sidebar - Brand -->
                <a
                    class="sidebar-brand d-flex align-items-center justify-content-center"
                    href="#"
                >
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">CRM Elektronik</div>
                </a>
                <!-- Akhir Sidebar - Brand -->

                <hr class="sidebar-divider my-0" />

                <!-- Sidebar Item Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.html">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a
                    >
                </li>
                <!-- Akhir Sidebar Item Dashboard -->

                <hr class="sidebar-divider" />

                <!-- Main Aplication -->
                <div class="sidebar-heading">Main Application</div>

                <li class="nav-item">
                    <a class="nav-link" href="pelanggan.html">
                        <i class="fas fa-fw fa-people-arrows"></i>
                        <span>Pelanggan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="konsumen.html">
                        <i class="fas fa-fw fa-user-tie"></i>
                        <span>Konsumen</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="distributor.html">
                        <i class="fas fa-fw fa-truck"></i>
                        <span>Distributor</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="barang.html">
                        <i class="fas fa-fw fa-box"></i>
                        <span>Barang</span>
                    </a>
                </li>

                <li class="nav-item active">
                    <a
                        class="nav-link"
                        href="#"
                        data-toggle="collapse"
                        data-target="#collapse1"
                        aria-expanded="true"
                        aria-controls="collapse1"
                    >
                        <i class="fas fa-fw fa-store-alt"></i>

                        <span>Transaksi</span>
                    </a>
                    <div
                        id="collapse1"
                        class="collapse show"
                        aria-labelledby="heading1"
                        data-parent="#accordionSidebar"
                    >
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Data Transaksi</h6>
                            <a
                                class="collapse-item active"
                                href="transaksi.html"
                                >Transaksi Penjualan</a
                            >
                            <a class="collapse-item" href="jenisTrans.html"
                                >Jenis Transaksi</a
                            >
                            >
                        </div>
                    </div>
                </li>
                <!-- Akhir Main Aplication -->

                <hr class="sidebar-divider" />

                <!-- Customer Services -->
                <div class="sidebar-heading">Customer Services</div>

                <li class="nav-item">
                    <a
                        class="nav-link collapsed"
                        href="#"
                        data-toggle="collapse"
                        data-target="#collapse2"
                        aria-expanded="true"
                        aria-controls="collapse2"
                    >
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Riwayat Transaksi</span>
                    </a>
                    <div
                        id="collapse2"
                        class="collapse"
                        aria-labelledby="heading2"
                        data-parent="#accordionSidebar"
                    >
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Riwayat Transaksi</h6>
                            <a
                                class="collapse-item"
                                href="riwayatTransPelanggan.html"
                                >Pelanggan</a
                            >
                            <a
                                class="collapse-item"
                                href="riwayatTransKonsumen.html"
                                >Konsumen</a
                            >
                            >
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="jenisTrans.html">
                        <i class="fas fa-fw fa-receipt"></i>
                        <span>Jenis Transaksi</span></a
                    >
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link collapsed"
                        href="#"
                        data-toggle="collapse"
                        data-target="#collapse3"
                        aria-expanded="true"
                        aria-controls="collapse3"
                    >
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Poin</span>
                    </a>
                    <div
                        id="collapse3"
                        class="collapse"
                        aria-labelledby="heading3"
                        data-parent="#accordionSidebar"
                    >
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Data Poin</h6>
                            <a class="collapse-item" href="promo.html">Poin</a>
                            <a class="collapse-item" href="penukaranPoin.html"
                                >Penukaran Poin</a
                            >
                            >
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="sranKritik.html">
                        <i class="fas fa-fw fa-comment"></i>
                        <span>Saran Kritik</span></a
                    >
                </li>
                <!-- Akhir Customer Services -->
            </ul>
            <!-- Akhir Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav
                        class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
                    >
                        <!-- Sidebar Toggle (Topbar) -->
                        <button
                            id="sidebarToggleTop"
                            class="btn btn-link rounded-circle mr-3"
                        >
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                        >
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control bg-light border-0 small"
                                    placeholder="Search for..."
                                    aria-label="Search"
                                    aria-describedby="basic-addon2"
                                />
                                <div class="input-group-append">
                                    <button
                                        class="btn btn-primary"
                                        type="button"
                                    >
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="userDropdown"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <span
                                        class="mr-2 d-none d-lg-inline text-gray-600 small"
                                        >Nur Aria Hibnastiar</span
                                    >
                                    <img
                                        class="img-profile rounded-circle"
                                        src="../img/undraw_profile.svg"
                                    />
                                </a>
                                <!-- Dropdown - User Information -->
                                <div
                                    class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown"
                                >
                                    <a class="dropdown-item" href="#">
                                        <i
                                            class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"
                                        ></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i
                                            class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"
                                        ></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i
                                            class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"
                                        ></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a
                                        class="dropdown-item"
                                        href="#"
                                        data-toggle="modal"
                                        data-target="#logoutModal"
                                    >
                                        <i
                                            class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                                        ></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid overflow-auto">
                        <h1 class="h3 mb-4 text-gray-800">
                            Transaksi Penjualan
                        </h1>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div
                                class="card-header py-3 d-flex justify-content-between align-items-center"
                            >
                                <h6 class="m-0 font-weight-bold text-primary">
                                    Data Transaksi Penjualan
                                </h6>

                                <!-- Button trigger modal -->
                                <button
                                    type="button"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#barang"
                                >
                                    Tambah Transaksi
                                </button>

                                <!-- Modal -->
                                <div
                                    class="modal fade"
                                    id="barang"
                                    tabindex="-1"
                                    aria-labelledby="exampleModalLabel"
                                    aria-hidden="true"
                                >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5
                                                    class="modal-title"
                                                    id="exampleModalLabel"
                                                >
                                                    Tambah Transaksi Penjualan
                                                </h5>
                                                <button
                                                    type="button"
                                                    class="close"
                                                    data-dismiss="modal"
                                                    aria-label="Close"
                                                >
                                                    <span aria-hidden="true"
                                                        >&times;</span
                                                    >
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="inputNama1"
                                                            >Nama</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="inputNama1"
                                                        />
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputNama1"
                                                            >List Barang</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="inputNama1"
                                                        />
                                                    </div>

                                                    <div class="form-group">
                                                        <label
                                                            for="jenisBarang1"
                                                            >Barang</label
                                                        >

                                                        <select
                                                            id="choices-multiple-remove-button"
                                                            class="form-control"
                                                            placeholder="Masukan Barang"
                                                            multiple
                                                        >
                                                            <option
                                                                value="Philips27W"
                                                            >
                                                                Lampu Philips27W
                                                            </option>
                                                            <option
                                                                value="Mouser Razor"
                                                            >
                                                                Mouse Razor
                                                            </option>
                                                            <option
                                                                value="Kabel Kenko 200M"
                                                            >
                                                                Kabel Kenko 200M
                                                            </option>
                                                            <option
                                                                value="Lampu Philip 16W"
                                                            >
                                                                Lampu Philip 16W
                                                            </option>
                                                            <option
                                                                value="Baterai ABC A3"
                                                            >
                                                                Baterai ABC A3
                                                            </option>
                                                            <option
                                                                value="Headset KZ Bass"
                                                            >
                                                                Headset KZ Bass
                                                            </option>
                                                            <option
                                                                value="Mouse Razor"
                                                            >
                                                                Mouse Razor
                                                            </option>
                                                            <option
                                                                value="Mic Lavalier"
                                                            >
                                                                Mic Lavalier
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label
                                                            for="hargaBarang1"
                                                            >Total Harga</label
                                                        >
                                                        <input
                                                            type="number"
                                                            class="form-control"
                                                            id="hargaBarang1"
                                                        />
                                                    </div>

                                                    <div class="form-group">
                                                        <label
                                                            for="hargaBarang1"
                                                            >Jumlah
                                                            Transaksi</label
                                                        >
                                                        <input
                                                            type="number"
                                                            class="form-control"
                                                            id="hargaBarang1"
                                                            disabled
                                                            value="10"
                                                        />
                                                    </div>

                                                    <div class="form-group">
                                                        <label
                                                            for="jumlahBarang1"
                                                            >Tanggal</label
                                                        >
                                                        <input
                                                            type="date"
                                                            class="form-control"
                                                            id="jumlahBarang1"
                                                            value="120"
                                                        />
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="jenisTrans"
                                                            >Jenis
                                                            Transaksi</label
                                                        >
                                                        <select
                                                            class="form-control"
                                                            id="jenisTrans"
                                                        >
                                                            <option selected>
                                                                -- Pilih Jenis
                                                                Transaksi --
                                                            </option>
                                                            <option>
                                                                Tunai
                                                            </option>
                                                            <option>
                                                                Non-Tunai [Dana]
                                                            </option>
                                                            <option>
                                                                Non-Tunai
                                                                [GoPay]
                                                            </option>
                                                            <option>
                                                                Non-Tunai
                                                                [ShopePay]
                                                            </option>
                                                            <option>
                                                                Non-Tunai [Ovo]
                                                            </option>
                                                            <option>
                                                                Cicil
                                                            </option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button
                                                    type="button"
                                                    class="btn btn-secondary"
                                                    data-dismiss="modal"
                                                >
                                                    Close
                                                </button>
                                                <button
                                                    type="button"
                                                    class="btn btn-primary"
                                                >
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table
                                        class="table table-bordered"
                                        id="dataTable"
                                        width="100%"
                                        cellspacing="0"
                                    >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>List Barang</th>
                                                <th>Total Harga</th>
                                                <th>Jumlah Transaksi</th>
                                                <th>Tanggal</th>
                                                <th>Jenis Transaksi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Cecilia</td>
                                                <td>
                                                    <ol class="m-0 pl-3">
                                                        <li>
                                                            Lampu Philips 27W
                                                        </li>
                                                        <li>Mouse Razor</li>
                                                    </ol>
                                                </td>
                                                <td>Rp.127.000</td>
                                                <td>20</td>
                                                <td>4/03/2023</td>
                                                <td>Tunai</td>
                                                <td>
                                                    <!-- Action Edit -->
                                                    <span>
                                                        <!-- Button button Edit -->
                                                        <span
                                                            type="button"
                                                            class="badge badge-info py-2 px-4"
                                                            data-toggle="modal"
                                                            data-target="#editBarang1"
                                                        >
                                                            Edit
                                                        </span>
                                                        <!-- Akhir button Edit -->

                                                        <!-- Modal Edit -->
                                                        <div
                                                            class="modal fade"
                                                            id="editBarang1"
                                                            tabindex="-1"
                                                            aria-labelledby="editBarangLabel"
                                                            aria-hidden="true"
                                                        >
                                                            <div
                                                                class="modal-dialog"
                                                            >
                                                                <div
                                                                    class="modal-content"
                                                                >
                                                                    <div
                                                                        class="modal-header"
                                                                    >
                                                                        <h5
                                                                            class="modal-title"
                                                                            id="editDistributorLabel"
                                                                        >
                                                                            Edit
                                                                            Transaksi
                                                                            1
                                                                        </h5>
                                                                        <button
                                                                            type="button"
                                                                            class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"
                                                                        >
                                                                            <span
                                                                                aria-hidden="true"
                                                                                >&times;</span
                                                                            >
                                                                        </button>
                                                                    </div>
                                                                    <div
                                                                        class="modal-body"
                                                                    >
                                                                        <form>
                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="inputNama1"
                                                                                    >Nama</label
                                                                                >
                                                                                <input
                                                                                    type="text"
                                                                                    class="form-control"
                                                                                    id="inputNama1"
                                                                                    value="Cecilia"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="jenisBarang1"
                                                                                    >Barang</label
                                                                                >

                                                                                <select
                                                                                    id="choices-multiple-remove-button"
                                                                                    class="form-control"
                                                                                    placeholder="Masukan Barang"
                                                                                    multiple
                                                                                >
                                                                                    <option
                                                                                        value="Philips27W"
                                                                                        selected
                                                                                    >
                                                                                        Lampu
                                                                                        Philips27W
                                                                                    </option>
                                                                                    <option
                                                                                        value="Mouser Razor"
                                                                                        selected
                                                                                    >
                                                                                        Mouse
                                                                                        Razor
                                                                                    </option>
                                                                                    <option
                                                                                        value="Kabel Kenko 200M"
                                                                                    >
                                                                                        Kabel
                                                                                        Kenko
                                                                                        200M
                                                                                    </option>
                                                                                    <option
                                                                                        value="Lampu Philip 16W"
                                                                                    >
                                                                                        Lampu
                                                                                        Philip
                                                                                        16W
                                                                                    </option>
                                                                                    <option
                                                                                        value="Baterai ABC A3"
                                                                                    >
                                                                                        Baterai
                                                                                        ABC
                                                                                        A3
                                                                                    </option>
                                                                                    <option
                                                                                        value="Headset KZ Bass"
                                                                                    >
                                                                                        Headset
                                                                                        KZ
                                                                                        Bass
                                                                                    </option>
                                                                                    <option
                                                                                        value="Mouse Razor"
                                                                                    >
                                                                                        Mouse
                                                                                        Razor
                                                                                    </option>
                                                                                    <option
                                                                                        value="Mic Lavalier"
                                                                                    >
                                                                                        Mic
                                                                                        Lavalier
                                                                                    </option>
                                                                                </select>
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="hargaBarang1"
                                                                                    >Total
                                                                                    Harga</label
                                                                                >
                                                                                <input
                                                                                    type="number"
                                                                                    class="form-control"
                                                                                    id="hargaBarang1"
                                                                                    value="127.000"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="hargaBarang1"
                                                                                    >Jumlah
                                                                                    Transaksi</label
                                                                                >
                                                                                <input
                                                                                    type="number"
                                                                                    class="form-control"
                                                                                    id="hargaBarang1"
                                                                                    disabled
                                                                                    value="20"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="jumlahBarang1"
                                                                                    >Tanggal</label
                                                                                >
                                                                                <input
                                                                                    type="date"
                                                                                    class="form-control"
                                                                                    id="jumlahBarang1"
                                                                                    value="2023-03-04"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="jenisTrans"
                                                                                    >Jenis
                                                                                    Transaksi</label
                                                                                >
                                                                                <select
                                                                                    class="form-control"
                                                                                    id="jenisTrans"
                                                                                >
                                                                                    <option
                                                                                        selected
                                                                                    >
                                                                                        --
                                                                                        Pilih
                                                                                        Jenis
                                                                                        Transaksi
                                                                                        --
                                                                                    </option>
                                                                                    <option
                                                                                        selected
                                                                                    >
                                                                                        Tunai
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [Dana]
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [GoPay]
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [ShopePay]
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [Ovo]
                                                                                    </option>
                                                                                    <option>
                                                                                        Cicil
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div
                                                                        class="modal-footer"
                                                                    >
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal"
                                                                        >
                                                                            Batal
                                                                        </button>
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-primary"
                                                                        >
                                                                            Ubah
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Akhir Modal Edit-->
                                                    </span>
                                                    <!-- Akhir Action Edit -->

                                                    <!-- Action Delete  -->
                                                    <span>
                                                        <span
                                                            type="button"
                                                            class="badge badge-danger mt-2 py-2 px-4"
                                                            data-toggle="modal"
                                                            data-target="#hapus"
                                                        >
                                                            Delete
                                                        </span>
                                                        <div
                                                            class="modal fade"
                                                            id="hapus"
                                                            tabindex="-1"
                                                            aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true"
                                                        >
                                                            <div
                                                                class="modal-dialog modal-dialog-centered"
                                                            >
                                                                <div
                                                                    class="modal-content"
                                                                >
                                                                    <div
                                                                        class="modal-header"
                                                                    >
                                                                        <h5
                                                                            class="modal-title"
                                                                            id="exampleModalLabel"
                                                                        >
                                                                            Hapus
                                                                            1
                                                                        </h5>
                                                                        <button
                                                                            type="button"
                                                                            class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"
                                                                        >
                                                                            <span
                                                                                aria-hidden="true"
                                                                                >&times;</span
                                                                            >
                                                                        </button>
                                                                    </div>
                                                                    <div
                                                                        class="modal-body"
                                                                    >
                                                                        <h5>
                                                                            Anda
                                                                            Yakin
                                                                            Ingin
                                                                            Menghapus?
                                                                        </h5>
                                                                    </div>
                                                                    <div
                                                                        class="modal-footer"
                                                                    >
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal"
                                                                        >
                                                                            Batal
                                                                        </button>
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-danger"
                                                                        >
                                                                            Hapus
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                    <!-- Akhir Action Delete -->
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Freyanashifa</td>
                                                <td>
                                                    <ol class="m-0 pl-3">
                                                        <li>
                                                            Kabel Kenko 200M
                                                        </li>
                                                        <li>
                                                            Lampu Philip 16W
                                                        </li>
                                                        <li>Baterai ABC A3</li>
                                                    </ol>
                                                </td>
                                                <td>Rp.167.000</td>
                                                <td>15</td>
                                                <td>17/03/2023</td>
                                                <td>Non-Tunai (Dana)</td>
                                                <td>
                                                    <!-- Action Edit -->
                                                    <span>
                                                        <!-- Button button Edit -->
                                                        <span
                                                            type="button"
                                                            class="badge badge-info py-2 px-4"
                                                            data-toggle="modal"
                                                            data-target="#editBarang2"
                                                        >
                                                            Edit
                                                        </span>
                                                        <!-- Akhir button Edit -->

                                                        <!-- Modal Edit -->
                                                        <div
                                                            class="modal fade"
                                                            id="editBarang2"
                                                            tabindex="-1"
                                                            aria-labelledby="editBarangLabel"
                                                            aria-hidden="true"
                                                        >
                                                            <div
                                                                class="modal-dialog"
                                                            >
                                                                <div
                                                                    class="modal-content"
                                                                >
                                                                    <div
                                                                        class="modal-header"
                                                                    >
                                                                        <h5
                                                                            class="modal-title"
                                                                            id="editDistributorLabel"
                                                                        >
                                                                            Edit
                                                                            Transaksi
                                                                            2
                                                                        </h5>
                                                                        <button
                                                                            type="button"
                                                                            class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"
                                                                        >
                                                                            <span
                                                                                aria-hidden="true"
                                                                                >&times;</span
                                                                            >
                                                                        </button>
                                                                    </div>
                                                                    <div
                                                                        class="modal-body"
                                                                    >
                                                                        <form>
                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="inputNama1"
                                                                                    >Nama</label
                                                                                >
                                                                                <input
                                                                                    type="text"
                                                                                    class="form-control"
                                                                                    id="inputNama1"
                                                                                    value="Cecilia"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="jenisBarang1"
                                                                                    >Barang</label
                                                                                >

                                                                                <select
                                                                                    id="choices-multiple-remove-button"
                                                                                    class="form-control"
                                                                                    placeholder="Masukan Barang"
                                                                                    multiple
                                                                                >
                                                                                    <option
                                                                                        value="Philips27W"
                                                                                        selected
                                                                                    >
                                                                                        Lampu
                                                                                        Philips27W
                                                                                    </option>
                                                                                    <option
                                                                                        value="Mouser Razor"
                                                                                        selected
                                                                                    >
                                                                                        Mouse
                                                                                        Razor
                                                                                    </option>
                                                                                    <option
                                                                                        value="Kabel Kenko 200M"
                                                                                    >
                                                                                        Kabel
                                                                                        Kenko
                                                                                        200M
                                                                                    </option>
                                                                                    <option
                                                                                        value="Lampu Philip 16W"
                                                                                    >
                                                                                        Lampu
                                                                                        Philip
                                                                                        16W
                                                                                    </option>
                                                                                    <option
                                                                                        value="Baterai ABC A3"
                                                                                    >
                                                                                        Baterai
                                                                                        ABC
                                                                                        A3
                                                                                    </option>
                                                                                    <option
                                                                                        value="Headset KZ Bass"
                                                                                    >
                                                                                        Headset
                                                                                        KZ
                                                                                        Bass
                                                                                    </option>
                                                                                    <option
                                                                                        value="Mouse Razor"
                                                                                    >
                                                                                        Mouse
                                                                                        Razor
                                                                                    </option>
                                                                                    <option
                                                                                        value="Mic Lavalier"
                                                                                    >
                                                                                        Mic
                                                                                        Lavalier
                                                                                    </option>
                                                                                </select>
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="hargaBarang1"
                                                                                    >Total
                                                                                    Harga</label
                                                                                >
                                                                                <input
                                                                                    type="number"
                                                                                    class="form-control"
                                                                                    id="hargaBarang1"
                                                                                    value="127.000"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="hargaBarang1"
                                                                                    >Jumlah
                                                                                    Transaksi</label
                                                                                >
                                                                                <input
                                                                                    type="number"
                                                                                    class="form-control"
                                                                                    id="hargaBarang1"
                                                                                    disabled
                                                                                    value="20"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="jumlahBarang1"
                                                                                    >Tanggal</label
                                                                                >
                                                                                <input
                                                                                    type="date"
                                                                                    class="form-control"
                                                                                    id="jumlahBarang1"
                                                                                    value="2023-03-04"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="jenisTrans"
                                                                                    >Jenis
                                                                                    Transaksi</label
                                                                                >
                                                                                <select
                                                                                    class="form-control"
                                                                                    id="jenisTrans"
                                                                                >
                                                                                    <option
                                                                                        selected
                                                                                    >
                                                                                        --
                                                                                        Pilih
                                                                                        Jenis
                                                                                        Transaksi
                                                                                        --
                                                                                    </option>
                                                                                    <option
                                                                                        selected
                                                                                    >
                                                                                        Tunai
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [Dana]
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [GoPay]
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [ShopePay]
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [Ovo]
                                                                                    </option>
                                                                                    <option>
                                                                                        Cicil
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div
                                                                        class="modal-footer"
                                                                    >
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal"
                                                                        >
                                                                            Batal
                                                                        </button>
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-primary"
                                                                        >
                                                                            Ubah
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Akhir Modal Edit-->
                                                    </span>
                                                    <!-- Akhir Action Edit -->

                                                    <!-- Action Delete  -->
                                                    <span>
                                                        <span
                                                            type="button"
                                                            class="badge badge-danger mt-2 py-2 px-4"
                                                            data-toggle="modal"
                                                            data-target="#hapus"
                                                        >
                                                            Delete
                                                        </span>
                                                        <div
                                                            class="modal fade"
                                                            id="hapus"
                                                            tabindex="-1"
                                                            aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true"
                                                        >
                                                            <div
                                                                class="modal-dialog modal-dialog-centered"
                                                            >
                                                                <div
                                                                    class="modal-content"
                                                                >
                                                                    <div
                                                                        class="modal-header"
                                                                    >
                                                                        <h5
                                                                            class="modal-title"
                                                                            id="exampleModalLabel"
                                                                        >
                                                                            Hapus
                                                                            1
                                                                        </h5>
                                                                        <button
                                                                            type="button"
                                                                            class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"
                                                                        >
                                                                            <span
                                                                                aria-hidden="true"
                                                                                >&times;</span
                                                                            >
                                                                        </button>
                                                                    </div>
                                                                    <div
                                                                        class="modal-body"
                                                                    >
                                                                        <h5>
                                                                            Anda
                                                                            Yakin
                                                                            Ingin
                                                                            Menghapus?
                                                                        </h5>
                                                                    </div>
                                                                    <div
                                                                        class="modal-footer"
                                                                    >
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal"
                                                                        >
                                                                            Batal
                                                                        </button>
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-danger"
                                                                        >
                                                                            Hapus
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                    <!-- Akhir Action Delete -->
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Reva Fidela</td>
                                                <td>
                                                    <ol class="m-0 pl-3">
                                                        <li>
                                                            Lampu Philips 27W
                                                        </li>
                                                        <li>Mouse Razor</li>
                                                    </ol>
                                                </td>
                                                <td>Rp.127.000</td>
                                                <td>15</td>
                                                <td>27/03/2023</td>
                                                <td>Non-Tunai (ShopePay)</td>
                                                <td>
                                                    <!-- Action Edit -->
                                                    <span>
                                                        <!-- Button button Edit -->
                                                        <span
                                                            type="button"
                                                            class="badge badge-info py-2 px-4"
                                                            data-toggle="modal"
                                                            data-target="#editBarang3"
                                                        >
                                                            Edit
                                                        </span>
                                                        <!-- Akhir button Edit -->

                                                        <!-- Modal Edit -->
                                                        <div
                                                            class="modal fade"
                                                            id="editBarang3"
                                                            tabindex="-1"
                                                            aria-labelledby="editBarangLabel"
                                                            aria-hidden="true"
                                                        >
                                                            <div
                                                                class="modal-dialog"
                                                            >
                                                                <div
                                                                    class="modal-content"
                                                                >
                                                                    <div
                                                                        class="modal-header"
                                                                    >
                                                                        <h5
                                                                            class="modal-title"
                                                                            id="editDistributorLabel"
                                                                        >
                                                                            Edit
                                                                            Transaksi
                                                                            3
                                                                        </h5>
                                                                        <button
                                                                            type="button"
                                                                            class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"
                                                                        >
                                                                            <span
                                                                                aria-hidden="true"
                                                                                >&times;</span
                                                                            >
                                                                        </button>
                                                                    </div>
                                                                    <div
                                                                        class="modal-body"
                                                                    >
                                                                        <form>
                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="inputNama1"
                                                                                    >Nama</label
                                                                                >
                                                                                <input
                                                                                    type="text"
                                                                                    class="form-control"
                                                                                    id="inputNama1"
                                                                                    value="Cecilia"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="jenisBarang1"
                                                                                    >Barang</label
                                                                                >

                                                                                <select
                                                                                    id="choices-multiple-remove-button"
                                                                                    class="form-control"
                                                                                    placeholder="Masukan Barang"
                                                                                    multiple
                                                                                >
                                                                                    <option
                                                                                        value="Philips27W"
                                                                                        selected
                                                                                    >
                                                                                        Lampu
                                                                                        Philips27W
                                                                                    </option>
                                                                                    <option
                                                                                        value="Mouser Razor"
                                                                                        selected
                                                                                    >
                                                                                        Mouse
                                                                                        Razor
                                                                                    </option>
                                                                                    <option
                                                                                        value="Kabel Kenko 200M"
                                                                                    >
                                                                                        Kabel
                                                                                        Kenko
                                                                                        200M
                                                                                    </option>
                                                                                    <option
                                                                                        value="Lampu Philip 16W"
                                                                                    >
                                                                                        Lampu
                                                                                        Philip
                                                                                        16W
                                                                                    </option>
                                                                                    <option
                                                                                        value="Baterai ABC A3"
                                                                                    >
                                                                                        Baterai
                                                                                        ABC
                                                                                        A3
                                                                                    </option>
                                                                                    <option
                                                                                        value="Headset KZ Bass"
                                                                                    >
                                                                                        Headset
                                                                                        KZ
                                                                                        Bass
                                                                                    </option>
                                                                                    <option
                                                                                        value="Mouse Razor"
                                                                                    >
                                                                                        Mouse
                                                                                        Razor
                                                                                    </option>
                                                                                    <option
                                                                                        value="Mic Lavalier"
                                                                                    >
                                                                                        Mic
                                                                                        Lavalier
                                                                                    </option>
                                                                                </select>
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="hargaBarang1"
                                                                                    >Total
                                                                                    Harga</label
                                                                                >
                                                                                <input
                                                                                    type="number"
                                                                                    class="form-control"
                                                                                    id="hargaBarang1"
                                                                                    value="127.000"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="hargaBarang1"
                                                                                    >Jumlah
                                                                                    Transaksi</label
                                                                                >
                                                                                <input
                                                                                    type="number"
                                                                                    class="form-control"
                                                                                    id="hargaBarang1"
                                                                                    disabled
                                                                                    value="20"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="jumlahBarang1"
                                                                                    >Tanggal</label
                                                                                >
                                                                                <input
                                                                                    type="date"
                                                                                    class="form-control"
                                                                                    id="jumlahBarang1"
                                                                                    value="2023-03-04"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="jenisTrans"
                                                                                    >Jenis
                                                                                    Transaksi</label
                                                                                >
                                                                                <select
                                                                                    class="form-control"
                                                                                    id="jenisTrans"
                                                                                >
                                                                                    <option
                                                                                        selected
                                                                                    >
                                                                                        --
                                                                                        Pilih
                                                                                        Jenis
                                                                                        Transaksi
                                                                                        --
                                                                                    </option>
                                                                                    <option
                                                                                        selected
                                                                                    >
                                                                                        Tunai
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [Dana]
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [GoPay]
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [ShopePay]
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [Ovo]
                                                                                    </option>
                                                                                    <option>
                                                                                        Cicil
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div
                                                                        class="modal-footer"
                                                                    >
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal"
                                                                        >
                                                                            Batal
                                                                        </button>
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-primary"
                                                                        >
                                                                            Ubah
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Akhir Modal Edit-->
                                                    </span>
                                                    <!-- Akhir Action Edit -->

                                                    <!-- Action Delete  -->
                                                    <span>
                                                        <span
                                                            type="button"
                                                            class="badge badge-danger mt-2 py-2 px-4"
                                                            data-toggle="modal"
                                                            data-target="#hapus"
                                                        >
                                                            Delete
                                                        </span>
                                                        <div
                                                            class="modal fade"
                                                            id="hapus"
                                                            tabindex="-1"
                                                            aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true"
                                                        >
                                                            <div
                                                                class="modal-dialog modal-dialog-centered"
                                                            >
                                                                <div
                                                                    class="modal-content"
                                                                >
                                                                    <div
                                                                        class="modal-header"
                                                                    >
                                                                        <h5
                                                                            class="modal-title"
                                                                            id="exampleModalLabel"
                                                                        >
                                                                            Hapus
                                                                            1
                                                                        </h5>
                                                                        <button
                                                                            type="button"
                                                                            class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"
                                                                        >
                                                                            <span
                                                                                aria-hidden="true"
                                                                                >&times;</span
                                                                            >
                                                                        </button>
                                                                    </div>
                                                                    <div
                                                                        class="modal-body"
                                                                    >
                                                                        <h5>
                                                                            Anda
                                                                            Yakin
                                                                            Ingin
                                                                            Menghapus?
                                                                        </h5>
                                                                    </div>
                                                                    <div
                                                                        class="modal-footer"
                                                                    >
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal"
                                                                        >
                                                                            Batal
                                                                        </button>
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-danger"
                                                                        >
                                                                            Hapus
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                    <!-- Akhir Action Delete -->
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Shani Indira Natio</td>
                                                <td>
                                                    <ol class="m-0 pl-3">
                                                        <li>
                                                            Lampu Philips 27W
                                                        </li>
                                                        <li>Mouse Razor</li>
                                                    </ol>
                                                </td>
                                                <td>Rp.127.000</td>
                                                <td>10</td>
                                                <td>30/03/2023</td>
                                                <td>Non-Tunai (ShopePay)</td>
                                                <td>
                                                    <!-- Action Edit -->
                                                    <span>
                                                        <!-- Button button Edit -->
                                                        <span
                                                            type="button"
                                                            class="badge badge-info py-2 px-4"
                                                            data-toggle="modal"
                                                            data-target="#editBarang4"
                                                        >
                                                            Edit
                                                        </span>
                                                        <!-- Akhir button Edit -->

                                                        <!-- Modal Edit -->
                                                        <div
                                                            class="modal fade"
                                                            id="editBarang4"
                                                            tabindex="-1"
                                                            aria-labelledby="editBarangLabel"
                                                            aria-hidden="true"
                                                        >
                                                            <div
                                                                class="modal-dialog"
                                                            >
                                                                <div
                                                                    class="modal-content"
                                                                >
                                                                    <div
                                                                        class="modal-header"
                                                                    >
                                                                        <h5
                                                                            class="modal-title"
                                                                            id="editDistributorLabel"
                                                                        >
                                                                            Edit
                                                                            Transaksi
                                                                            4
                                                                        </h5>
                                                                        <button
                                                                            type="button"
                                                                            class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"
                                                                        >
                                                                            <span
                                                                                aria-hidden="true"
                                                                                >&times;</span
                                                                            >
                                                                        </button>
                                                                    </div>
                                                                    <div
                                                                        class="modal-body"
                                                                    >
                                                                        <form>
                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="inputNama1"
                                                                                    >Nama</label
                                                                                >
                                                                                <input
                                                                                    type="text"
                                                                                    class="form-control"
                                                                                    id="inputNama1"
                                                                                    value="Cecilia"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="jenisBarang1"
                                                                                    >Barang</label
                                                                                >

                                                                                <select
                                                                                    id="choices-multiple-remove-button"
                                                                                    class="form-control"
                                                                                    placeholder="Masukan Barang"
                                                                                    multiple
                                                                                >
                                                                                    <option
                                                                                        value="Philips27W"
                                                                                        selected
                                                                                    >
                                                                                        Lampu
                                                                                        Philips27W
                                                                                    </option>
                                                                                    <option
                                                                                        value="Mouser Razor"
                                                                                        selected
                                                                                    >
                                                                                        Mouse
                                                                                        Razor
                                                                                    </option>
                                                                                    <option
                                                                                        value="Kabel Kenko 200M"
                                                                                    >
                                                                                        Kabel
                                                                                        Kenko
                                                                                        200M
                                                                                    </option>
                                                                                    <option
                                                                                        value="Lampu Philip 16W"
                                                                                    >
                                                                                        Lampu
                                                                                        Philip
                                                                                        16W
                                                                                    </option>
                                                                                    <option
                                                                                        value="Baterai ABC A3"
                                                                                    >
                                                                                        Baterai
                                                                                        ABC
                                                                                        A3
                                                                                    </option>
                                                                                    <option
                                                                                        value="Headset KZ Bass"
                                                                                    >
                                                                                        Headset
                                                                                        KZ
                                                                                        Bass
                                                                                    </option>
                                                                                    <option
                                                                                        value="Mouse Razor"
                                                                                    >
                                                                                        Mouse
                                                                                        Razor
                                                                                    </option>
                                                                                    <option
                                                                                        value="Mic Lavalier"
                                                                                    >
                                                                                        Mic
                                                                                        Lavalier
                                                                                    </option>
                                                                                </select>
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="hargaBarang1"
                                                                                    >Total
                                                                                    Harga</label
                                                                                >
                                                                                <input
                                                                                    type="number"
                                                                                    class="form-control"
                                                                                    id="hargaBarang1"
                                                                                    value="127.000"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="hargaBarang1"
                                                                                    >Jumlah
                                                                                    Transaksi</label
                                                                                >
                                                                                <input
                                                                                    type="number"
                                                                                    class="form-control"
                                                                                    id="hargaBarang1"
                                                                                    disabled
                                                                                    value="20"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="jumlahBarang1"
                                                                                    >Tanggal</label
                                                                                >
                                                                                <input
                                                                                    type="date"
                                                                                    class="form-control"
                                                                                    id="jumlahBarang1"
                                                                                    value="2023-03-04"
                                                                                />
                                                                            </div>

                                                                            <div
                                                                                class="form-group"
                                                                            >
                                                                                <label
                                                                                    for="jenisTrans"
                                                                                    >Jenis
                                                                                    Transaksi</label
                                                                                >
                                                                                <select
                                                                                    class="form-control"
                                                                                    id="jenisTrans"
                                                                                >
                                                                                    <option
                                                                                        selected
                                                                                    >
                                                                                        --
                                                                                        Pilih
                                                                                        Jenis
                                                                                        Transaksi
                                                                                        --
                                                                                    </option>
                                                                                    <option
                                                                                        selected
                                                                                    >
                                                                                        Tunai
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [Dana]
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [GoPay]
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [ShopePay]
                                                                                    </option>
                                                                                    <option>
                                                                                        Non-Tunai
                                                                                        [Ovo]
                                                                                    </option>
                                                                                    <option>
                                                                                        Cicil
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div
                                                                        class="modal-footer"
                                                                    >
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal"
                                                                        >
                                                                            Batal
                                                                        </button>
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-primary"
                                                                        >
                                                                            Ubah
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Akhir Modal Edit-->
                                                    </span>
                                                    <!-- Akhir Action Edit -->

                                                    <!-- Action Delete  -->
                                                    <span>
                                                        <span
                                                            type="button"
                                                            class="badge badge-danger mt-2 py-2 px-4"
                                                            data-toggle="modal"
                                                            data-target="#hapus"
                                                        >
                                                            Delete
                                                        </span>
                                                        <div
                                                            class="modal fade"
                                                            id="hapus"
                                                            tabindex="-1"
                                                            aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true"
                                                        >
                                                            <div
                                                                class="modal-dialog modal-dialog-centered"
                                                            >
                                                                <div
                                                                    class="modal-content"
                                                                >
                                                                    <div
                                                                        class="modal-header"
                                                                    >
                                                                        <h5
                                                                            class="modal-title"
                                                                            id="exampleModalLabel"
                                                                        >
                                                                            Hapus
                                                                            1
                                                                        </h5>
                                                                        <button
                                                                            type="button"
                                                                            class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"
                                                                        >
                                                                            <span
                                                                                aria-hidden="true"
                                                                                >&times;</span
                                                                            >
                                                                        </button>
                                                                    </div>
                                                                    <div
                                                                        class="modal-body"
                                                                    >
                                                                        <h5>
                                                                            Anda
                                                                            Yakin
                                                                            Ingin
                                                                            Menghapus?
                                                                        </h5>
                                                                    </div>
                                                                    <div
                                                                        class="modal-footer"
                                                                    >
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal"
                                                                        >
                                                                            Batal
                                                                        </button>
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-danger"
                                                                        >
                                                                            Hapus
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                    <!-- Akhir Action Delete -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- akhir Begin Page Content -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Hibnastiar 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
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
        <div
            class="modal fade"
            id="logoutModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Ready to Leave?
                        </h5>
                        <button
                            class="close"
                            type="button"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Select "Logout" below if you are ready to end your
                        current session.
                    </div>
                    <div class="modal-footer">
                        <button
                            class="btn btn-secondary"
                            type="button"
                            data-dismiss="modal"
                        >
                            Cancel
                        </button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Logout Modal -->

        <!--? Link JS -->

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

        <!-- custom -->
        <script>
            $(document).ready(function () {
                var multipleCancelButton = new Choices(
                    "#choices-multiple-remove-button",
                    {
                        removeItemButton: true,
                        maxItemCount: null,
                        searchResultLimit: null,
                        renderChoiceLimit: null,
                    }
                );
            });
        </script>
        <!--? AkhirLink JS -->
    </body>
    <!-- Akhir Body -->
</html>
