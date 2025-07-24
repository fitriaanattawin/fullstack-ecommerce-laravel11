<!DOCTYPE html>
<html lang="en">
<head>
<style>
  td img {
    max-width: 50px;
    height: auto;
  }
  td, th {
    vertical-align: middle !important;
  }
  .aksi-buttons {
    white-space: nowrap;
  }
</style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Table Data Transaksi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminn/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="adminn/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="adminn/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="adminn/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            <a href="datatransaksi" class="nav-link active">
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
            <a href="pembelian" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
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
            <h1>Data Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Home</a></li>
              <li class="breadcrumb-item active">Data Transaksi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Transaction</h3>
              </div>
              <!-- /.card-header -->
             <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead class="text-center">
        <tr>
            <th>NO</th>
            <th>Nama User</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Total</th>
            <th>Status</th>
            <th>No Resi</th>
            <th>Tanggal</th>
            <th>Bukti</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        @foreach ($transaksis as $i => $t)
        <!-- Modal -->
<div class="modal fade" id="detailModal{{ $t->id }}" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <h6>Detail Produk:</h6>
        @foreach ($t->detailTransaksis as $item)
          <div class="row mb-3">
            <div class="col-md-3">
              @if ($item->product && file_exists(public_path('images/' . $item->product->gambar)))
                <img src="{{ asset('images/' . $item->product->gambar) }}" class="img-fluid rounded">
              @else
                <small class="text-muted">Foto tidak tersedia</small>
              @endif
            </div>
            <div class="col-md-9">
              <p><strong>Nama Produk:</strong> {{ $item->product->nama_produk ?? '-' }}</p>
              <p><strong>Qty:</strong> {{ $item->qty }}</p>
              <p><strong>Harga Satuan:</strong> Rp{{ number_format($item->harga, 0, ',', '.') }}</p>
              <p><strong>Subtotal:</strong> Rp{{ number_format($item->subtotal, 0, ',', '.') }}</p>
            </div>
          </div>
        @endforeach

        <hr>
        <h6>Bukti Pembayaran:</h6>
        @if ($t->bukti_pembayaran === 'COD')
          <p><strong>Metode Pembayaran:</strong> COD (Bayar di Tempat)</p>
        @else
          <img src="{{ asset('storage/' . $t->bukti_pembayaran) }}"
              alt="Bukti Pembayaran" width="100%">
        @endif
      </div>
      </div>
    </div>
  </div>
    <tr>
        <td>{{ $i + 1 }}</td>
        <td>{{ $t->user->name }}</td>
        <td>{{ $t->alamat }}</td>
        <td>{{ $t->no_hp }}</td>
        <td>Rp{{ number_format($t->total, 0, ',', '.') }}</td>
        <td>
            @if ($t->status == 'Ditolak')
                <span class="text-danger">
                    {{ $t->status }}<br>
                    <small>{{ $t->keterangan_status }}</small>
                </span>
            @elseif ($t->status == 'Dikirim')
                <span class="text-success">{{ $t->status }}</span>
            @else
                <span class="text-warning">{{ $t->status }}</span>
            @endif
        </td>

        <td>
            @if ($t->no_resi)
                {{ $t->no_resi }}
            @else
                <span class="text-muted">Belum ada</span>
            @endif
        </td>

        <td>{{ \Carbon\Carbon::parse($t->tanggal_transaksi)->format('d-m-Y H:i') }}</td>
        <td>
    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailModal{{ $t->id }}">Detail</button>
    </td>
       <td>
  @if ($t->status === 'Pending')
      <!-- Tombol Validasi -->
      <button class="btn btn-success btn-sm btn-validasi" data-id="{{ $t->id }}">
          Validasi
      </button>

      <!-- Tombol Tolak -->
      <button class="btn btn-danger btn-sm btn-tolak" data-id="{{ $t->id }}">
          Tolak
      </button>

      <!-- Form Validasi -->
      <form id="form-validasi-{{ $t->id }}" action="{{ route('transaksi.validasi', $t->id) }}" method="POST" style="display:none;">
          @csrf @method('PATCH')
      </form>

      <!-- Form Tolak -->
      <form id="form-tolak-{{ $t->id }}" action="{{ route('transaksi.tolak', $t->id) }}" method="POST" style="display:none;">
          @csrf @method('PATCH')
          <input type="hidden" name="alasan_tolak">
      </form>

      @elseif ($t->status === 'Dikirim')
          <span class="badge bg-success">
              <i class="fa fa-check"></i> Divalidasi
          </span>

      @elseif ($t->status === 'Ditolak')
          <span class="badge bg-danger" title="{{ $t->alasan_tolak }}">
              <i class="fa fa-times"></i> Ditolak
          </span>

        @else
            <span class="badge bg-secondary">
                {{ $t->status }}
            </span>
        @endif
          </td>
        </tr>
    @endforeach
    </tbody>
  </table>
</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Merch Store</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="adminn/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="adminn/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->

<script src="adminn/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="adminn/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="adminn/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="adminn/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="adminn/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="adminn/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="adminn/plugins/jszip/jszip.min.js"></script>
<script src="adminn/plugins/pdfmake/pdfmake.min.js"></script>
<script src="adminn/plugins/pdfmake/vfs_fonts.js"></script>
<script src="adminn/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="adminn/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="adminn/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="adminn/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminn/dist/js/demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.querySelectorAll('.btn-validasi').forEach(btn => {
  btn.addEventListener('click', () => {
    const id = btn.dataset.id;
    Swal.fire({
      title: 'Validasi transaksi?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Ya, Validasi',
      cancelButtonText: 'Batal'
    }).then(result => {
      if (result.isConfirmed) {
        document.getElementById('form-validasi-' + id).submit();
      }
    });
  });
});

document.querySelectorAll('.btn-tolak').forEach(btn => {
  btn.addEventListener('click', () => {
    const id = btn.dataset.id;
    Swal.fire({
      title: 'Tolak transaksi?',
      input: 'textarea',
      inputLabel: 'Alasan Penolakan',
      inputPlaceholder: 'Masukkan alasan penolakan di sini...',
      inputAttributes: {
        'aria-label': 'Masukkan alasan'
      },
      inputValidator: (value) => {
        if (!value) return 'Alasan wajib diisi';
      },
      showCancelButton: true,
      confirmButtonText: 'Tolak',
      cancelButtonText: 'Batal',
      icon: 'warning',
    }).then(result => {
      if (result.isConfirmed) {
        const form = document.getElementById('form-tolak-' + id);
        form.querySelector('input[name="alasan_tolak"]').value = result.value;
        form.submit();
      }
    });
  });
});
</script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
