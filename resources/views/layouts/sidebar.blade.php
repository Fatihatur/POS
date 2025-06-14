<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('AdminLTE-2/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ route('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ route('kategori.index')}}">
            <i class="fa fa-dashboard"></i> <span>Kategori</span>
          </a>
        </li>
        <li>
          <a href="{{ route('produk.index')}}">
            <i class="fa fa-dashboard"></i> <span>Produk</span>
          </a>
        </li>
        <li>
          <a href="{{ route('member.index')}}">
            <i class="fa fa-dashboard"></i> <span>Member</span>
          </a>
        </li>
        <li>
          <a href="{{ route('supplier.index')}}">
            <i class="fa fa-dashboard"></i> <span>Supplier</span>
          </a>
        </li>
        <li class="header">TRANSAKSI</li>
        <li>
          <a href="{{ route('pengeluaran.index')}}">
            <i class="fa fa-dashboard"></i> <span>Pengeluaran</span>
          </a>
        </li>
        <li>
          <a href="{{ route('pembelian.index')}}">
            <i class="fa fa-dashboard"></i> <span>Pembelian</span>
          </a>
        </li>
        <li>
          <a href="{{ route('penjualan.index')}}">
            <i class="fa fa-dashboard"></i> <span>Penjualan</span>
          </a>
        </li>
        <li>
          <a href="{{ route('transaksi.index') }}">
            <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
          </a>
        </li>
        <li>
          <a href="{{ route('transaksi.baru') }}">
            <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
          </a>
        </li>
        <li class="header">LAPORAN</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Laporan</span>
          </a>
        </li>
        <li class="header">SYTEM</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>User</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Seting</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>