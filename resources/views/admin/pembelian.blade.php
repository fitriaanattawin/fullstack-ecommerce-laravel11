<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Table Pembelian</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminn/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminn/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="adminn/index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="adminn/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="adminn/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="adminn/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="adminn/index3.html" class="brand-link">
      <img src="adminn/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Hallo Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="adminn/dist/img/Fourth.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/" class="d-block">Fourthh Nattawat</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="admin#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="form" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="table" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
              </p>
            </a>
            <li class="nav-item">
            <a href="datatransaksi" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Data Transaksi
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="mutasi" class="nav-link">
              <i class="nav-icon fas fa-exchange-alt"></i>
              <p>
                Mutasi
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="stok" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Stok Barang
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="pembelian" class="nav-link active">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Pembelian
              </p>
            </a>
          </li>
             <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="nav-link" style="background: none; border: none; color: white; text-align: left; width: 100%; padding-left: 1rem;">
                  <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Logout</p>
                </button>
            </form>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pembelian Tables</h1><br>
           <!-- Tombol Tambah -->
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalTambahPembelian">
            Tambah Pembelian
        </button>
        <!-- Tambah Vendorr -->
        <button class="btn btn-primary btn-sm rounded px-3 mb-3" data-toggle="modal" data-target="#modalTambahVendor">
            <i class="fas fa-plus mr-1"></i> Tambah Vendor
        </button>
        @if (session('success_vendor'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        {{ session('success_vendor') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Tutup">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pembelian Tables</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pembelian Barang</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
        <!-- Modal Tambah Pembelian -->
        <div class="modal fade" id="modalTambahPembelian" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <form action="{{ route('pembelian.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Pembelian</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>No Bukti</label>
                                    <input type="text" name="nomor_bukti" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Tanggal</label>
                                    <input type="date" name="tanggal_pembelian" class="form-control" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Vendor</label>
                                    <select name="vendor_id" class="form-control" required>
                                        <option value="">-- Pilih Vendor --</option>
                                        @foreach ($vendors as $vendor)
                                            <option value="{{ $vendor->id }}">{{ $vendor->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <h6>Daftar Produk</h6>
                            <div id="produk-wrapper">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <select name="product_id[]" class="form-control" required>
                                            <option value="">-- Pilih Produk --</option>
                                            @foreach ($products as $barang)
                                                <option value="{{ $barang->id }}">{{ $barang->nama_produk }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" name="qty[]" class="form-control" placeholder="Qty" required>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="harga_satuan[]" class="form-control" placeholder="Harga Satuan" required>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm" onclick="this.closest('.row').remove()">-</button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-sm btn-secondary" onclick="tambahProduk()">+ Produk</button>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- TAMBAH VENDOR BARU -->
        <div class="modal fade" id="modalTambahVendor" tabindex="-1" role="dialog" aria-labelledby="modalTambahVendorLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form action="{{ route('pembelian.vendor.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalTambahVendorLabel">Tambah Vendor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                    <label for="nama">Nama Vendor</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="no_hp">Telepon</label>
                    <input type="text" class="form-control" name="no_hp">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>
        </div>
        </div>

       <!-- Tabel Pembelian -->
<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>
                <th>No</th>
                <th>No Bukti</th>
                <th>Tanggal</th>
                <th>Vendor</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Dibuat Oleh</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembelians as $pembelian)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pembelian->nomor_bukti }}</td>
                    <td>{{ $pembelian->tanggal_pembelian }}</td>
                    <td>{{ $pembelian->vendor->nama }}</td>
                    <td>{{ number_format($pembelian->total, 0, ',', '.') }}</td>
                    <td>
                      @if ($pembelian->keterangan == 'Approved')
                    <span class="badge bg-success">Approved</span>
                @elseif ($pembelian->keterangan == 'Pending')
                    <span class="badge bg-warning">Pending</span>
                @else
                        <span class="badge bg-danger">Denied</span>
                @endif

                    </td>
                    <td>{{ $pembelian->user->name }}</td>
                    <td>
                       <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailModal{{ $pembelian->id }}">
                        Detail
                    </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Detail Pembelian -->
@foreach ($pembelians as $pembelian)
    <div class="modal fade" id="detailModal{{ $pembelian->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{ $pembelian->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel{{ $pembelian->id }}">
                        Detail Pembelian - {{ $pembelian->nomor_bukti }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Qty</th>
                                <th>Harga Satuan</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembelian->details as $d)
                                <tr>
                                    <td>{{ $d->product->nama_produk ?? 'Produk tidak ditemukan' }}</td>
                                    <td>{{ $d->qty }}</td>
                                    <td>{{ number_format($d->harga_satuan, 0, ',', '.') }}</td>
                                    <td>{{ number_format($d->qty * $d->harga_satuan, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Modal Footer --}}
                <div class="modal-footer">
                    @if($pembelian->keterangan === 'Pending')
                        <form action="{{ route('pembelian.approve', $pembelian->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success" onclick="return confirm('Yakin ingin approve pembelian ini?')">
                                Approve Pembelian
                            </button>
                        </form>
                    @endif
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>

            </div>
        </div>
    </div>
@endforeach


            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- Bootstrap 5 CSS -->
<!-- Bootstrap 4 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.2/css/bootstrap.min.css">

<!-- jQuery + Bootstrap 4 JS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.2/js/bootstrap.min.js"></script>

<!-- jQuery -->
<script src="adminn/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="adminn/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="adminn/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminn/dist/js/demo.js"></script>

<!-- Script Tambah Produk -->
<script>
    function tambahProduk() {
        const wrapper = document.getElementById('produk-wrapper');
        const html = `
        <div class="row mb-3">
            <div class="col-md-6">
                <select name="product_id[]" class="form-control" required>
                    <option value="">-- Pilih Produk --</option>
                    @foreach ($products as $barang)
                        <option value="{{ $barang->id }}">{{ $barang->nama_produk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <input type="number" name="qty[]" class="form-control" placeholder="Qty" required>
            </div>
            <div class="col-md-3">
                <input type="number" name="harga_satuan[]" class="form-control" placeholder="Harga Satuan" required>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-danger btn-sm" onclick="this.closest('.row').remove()">-</button>
            </div>
        </div>`;
        wrapper.insertAdjacentHTML('beforeend', html);
    }
</script>

<!-- jQuery dan Bootstrap 4 JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
