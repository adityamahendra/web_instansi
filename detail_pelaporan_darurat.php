<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detail Pelaporan Darurat | Instansi</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/detail-pelaporan.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-shield"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Instansi</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="petugas.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Petugas</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="pelaporan.php">
          <i class="fas fa-fw fa-file"></i>
          <span>Pelaporan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle"
                  src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profil-admin.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="row mt-4">
            <div class="col-xl-4 order-xl-2">
              <div class="card card-profile shadow">
                <div class="foto">
                  <img src="img/gbr.jpg" alt="Image placeholder" class="card-img-top">
                </div>
                <div class="row justify-content-center">
                  <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image" style="background-size: cover;">
                      <a href="#">
                        <img src="img/user2.jpg" class="rounded-circle profil-foto gallery-modal">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body" style="margin-top: 50px;">
                  <div class="text-center pt-3">
                    <h5 class="h4 font-weight-bold text-dark">
                      Ayu Wiradani
                    </h5>
                    <div class="d-flex justify-content-center align-items-center">
                      <i class="fas in fa-circle fa-xs text-success mr-2"></i>
                      <span>Valid</span>
                    </div>
                  </div>
                  <hr class="my-4" />
                  <div class="row">
                    <div class="col">
                      <div class="card-profile-stats d-flex justify-content-center">
                        <div class="d-flex flex-column align-items-center" style="flex: 33%;">
                          <span class="h6 font-weight-bold text-dark">Pelapor</span>
                          <span class="h6">Masyarakat</span>
                        </div>
                        <div class="d-flex flex-column align-items-center" style="flex: 33%;">
                          <span class="h6 font-weight-bold text-dark">Kategori</span>
                          <span class="h6">Darurat</span>
                        </div>
                        <div class="d-flex flex-column align-items-center" style="flex: 33%;">
                          <span class="h6 font-weight-bold text-dark">Waktu</span>
                          <span class="h6">02 Feb 2020</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 order-xl-1">
              <div class="card shadow">
                <div class="card-header">
                  <div class="col-12 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Data Darurat</h6>
                    <!-- tombol kembali -->
                    <a href="pelaporan.php" class="btn btn-primary btn-icon-split btn-sm">
                      <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                      </span>
                      <span class="text">Kembali</span>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <form>
                    <h6 class="heading-small text-muted mb-4">Informasi Pelaporan</h6>
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="nama">Nama Pelapor</label>
                            <input type="text" id="nama" class="form-control" placeholder="Nama Pelapor"
                              value="Ayu Wiradani">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="nama">Jenis Pelaporan</label>
                            <input type="text" id="nama" class="form-control" placeholder="Jenis Pelaporan"
                              value="Kecelakaan">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-first-name">Jenis Kelamin</label>
                            <input type="text" id="input-first-name" class="form-control" placeholder="Jenis Kelamin"
                              value="Perempuan">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-email">No. Telp</label>
                            <input type="text" id="input-telp" class="form-control" value="+6281222383282"
                              placeholder="No. Telp">
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Lokasi keluhan</h6>
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="form-control-label" for="input-address">Alamat</label>
                            <input id="input-address" class="form-control" placeholder="Alamat"
                              value="Jalan Raya Kerobakan No.2B, Kerobokan Kelod" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label" for="input-country">Desa</label>
                            <input type="text" id="input-country" class="form-control" placeholder="Desa"
                              value="Desa A">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label" for="input-country">Kecamatan</label>
                            <input type="text" id="input-postal-code" class="form-control" placeholder="Kecamatan"
                              value="Kuta Utara">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label" for="input-city">Kabupaten</label>
                            <input type="text" id="input-city" class="form-control" placeholder="Kabupaten"
                              value="Badung">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Peta Pelaporan</label>
                        <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505145.0067497398!2d114.79134724548834!3d-8.455996496072656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd22f7520fca7d3%3A0x2872b62cc456cd84!2sBali!5e0!3m2!1sid!2sid!4v1614152588544!5m2!1sid!2sid"
                          width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      </div>
                    </div>                  
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- modal foto -->
  <div id="modal" class="modal">
    <div id="modal-overlay" class="modal-overlay"></div>
    <button id="btn-close-modal" class="btn-close-modal">&times;</button>
    <div class="modal-content">
      <img id="img-modal" src="https://www.w3schools.com/howto/img_snow.jpg" class="img-modal" />
    </div>
  </div>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin akan keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Tekan tombol keluar untuk keluar dari akun ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="login.php">Keluar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="js/modal-img.js"></script>
  <script src="js/modal.js"></script>

</body>

</html>