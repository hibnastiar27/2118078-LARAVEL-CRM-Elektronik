<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-bolt"></i>
    </div>
    <div class="sidebar-brand-text mx-3">CRM Elektronik</div>
  </a>
  <!-- Akhir Sidebar - Brand -->

  <hr class="sidebar-divider my-0" />

  <!-- Sidebar Item Dashboard -->
  <li class="nav-item {{ $navText === 'Dashboard' ? 'active' : '' }}">
    <a class="nav-link" href="/">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <!-- Akhir Sidebar Item Dashboard -->

  <hr class="sidebar-divider" />

  <!-- Main Aplication -->
  <div class="sidebar-heading">Main Application</div>

  <li class="nav-item {{ $navText === 'Pelanggan' ? 'active' : '' }}">
    <a class="nav-link" href="/pelanggan">
      <i class="fas fa-fw fa-people-arrows"></i><span>Pelanggan</span>
    </a>
  </li>

  <li class="nav-item {{ $navText === 'Konsumen' ? 'active' : '' }}">
    <a class="nav-link" href="/konsumen">
      <i class="fas fa-fw fa-user-tie"></i><span>Konsumen</span>
    </a>
  </li>

  <li class="nav-item {{ $navText === 'Distributor' ? 'active' : '' }}">
    <a class="nav-link" href="/distributor">
      <i class="fas fa-fw fa-truck"></i><span>Distributor</span>
    </a>
  </li>

  <li class="nav-item {{ $navText === 'Barang' ? 'active' : '' }}">
    <a class="nav-link" href="/barang">
      <i class="fas fa-fw fa-box"></i><span>Barang</span>
    </a>
  </li>

  <li class="nav-item {{ $navText === 'Transaksi' ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
      <i class="fas fa-fw fa-store-alt"></i>

      <span>Transaksi</span>
    </a>
    <div id="collapse1" class="collapse {{ $navText === 'Transaksi' ? 'show' : '' }}" aria-labelledby="heading1" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Transaksi</h6>
        <a class="collapse-item {{ $navTextItem === 'Jenis Transaksi' ? 'active' : '' }}" href="/jenis_transaksi">Jenis Transaksi</a>
        <a class="collapse-item {{ $navTextItem === 'Transaksi Penjualan' ? 'active' : '' }}" href="/transaksi">Transaksi Penjualan</a>
        >
      </div>
    </div>
  </li>
  <!-- Akhir Main Aplication -->

  <hr class="sidebar-divider" />

  <!-- Customer Services -->
  <div class="sidebar-heading">Customer Services</div>

  <li class="nav-item {{ $navText === 'Riwayat Transaksi' ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
      <i class="fas fa-fw fa-history"></i>
      <span>Riwayat Transaksi</span>
    </a>
    <div id="collapse2" class="collapse {{ $navText === 'Riwayat Transaksi' ? 'show' : '' }}" aria-labelledby="heading2" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Riwayat Transaksi</h6>
        <a class="collapse-item {{ $navTextItem === 'Pelanggan' ? 'active' : '' }}" href="/riwayat_trans_pelanggan">Pelanggan</a>
        <a class="collapse-item {{ $navTextItem === 'Konsumen' ? 'active' : '' }}" href="/riwayat_trans_konsumen">Konsumen</a>
        >
      </div>
    </div>
  </li>

  <li class="nav-item {{ $navText === 'Poin' ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
      <i class="fas fa-fw fa-coins"></i>
      <span>Poin</span>
    </a>
    <div id="collapse3" class="collapse {{ $navText === 'Poin' ? 'show' : '' }}" aria-labelledby="heading3" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Poin</h6>
        <a class="collapse-item {{ $navTextItem === 'Poin' ? 'active' : '' }}" href="/poin">Poin</a>
        <a class="collapse-item {{ $navTextItem === 'Penukaran Poin' ? 'active' : '' }}" href="/penukaran_poin">Penukaran Poin</a>
        >
      </div>
    </div>
  </li>

  <li class="nav-item {{ $navText === 'Saran Kritik' ? 'active' : '' }} ">
    <a class="nav-link" href="saran_kritik">
      <i class="fas fa-fw fa-comment"></i>
      <span>Saran Kritik</span></a>
  </li>
  <!-- Akhir Customer Services -->

  <hr class="sidebar-divider" />

  <!-- Admin -->
  <div class="sidebar-heading">Pengelola</div>

  <li class="nav-item {{ $navText === 'Pengelola' ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
      <i class="fas fa-fw fa-users-cog"></i>
      <span>Pengelola</span>
    </a>
    <div id="collapse4" class="collapse {{ $navText === 'Pengelola' ? 'show' : '' }}" aria-labelledby="heading3" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Pengelola</h6>
        <a class="collapse-item {{ $navTextItem === 'Admin' ? 'active' : '' }}" href="/admin">Admin</a>
        <a class="collapse-item {{ $navTextItem === 'User' ? 'active' : '' }}" href="/user">User</a>
        >
      </div>
    </div>
  </li>
</ul>
<!-- Akhir Sidebar -->
