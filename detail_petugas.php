<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detail Petugas | Instansi</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/detail-pelaporan.css">
  <link rel="stylesheet" href="css/detail-petugas.css">

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
      <li class="nav-item active">
        <a class="nav-link" href="petugas.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Petugas</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
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
          <div class="row justify-content-center">
            <div class="col-xl-12">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <div class="col-12 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Petugas</h6>
                    <!-- tombol kembali -->
                    <a href="petugas.php" class="btn btn-primary btn-icon-split btn-sm">
                      <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                      </span>
                      <span class="text">Kembali</span>
                    </a>
                  </div>
                </div>

                <div class="card-body">

                  <!-- atas -->
                  <div class="d-flex justify-content-between align-items-start p-4" style="gap: 20px;">

                    <div class="row">
                      <div class="profile-img">
                        <img src="img/user3.jpg" class="gallery-modal" />
                        <div class="file btn">Ganti Foto<input type="file" name="file" /></div>
                      </div>

                      <div class="profile-head pl-4">
                        <h5 class="text-dark font-weight-bold">Aditya Mahendra</h5>
                        <h6 class="text-primary">adityanym</h6>
                        <ul class="nav nav-tabs pt-4" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="profil-tab" data-toggle="tab" href="#profil" role="tab"
                              aria-controls="profil" aria-selected="true">Profil</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="instansi-tab" data-toggle="tab" href="#instansi" role="tab"
                              aria-controls="instansi" aria-selected="false">Instansi</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#modalEditPetugas">Edit Petugas</button>
                  </div>

                  <!-- tab profil -->
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profil" role="tabpanel" aria-labelledby="profil-tab">
                      <!-- keterangan -->
                      <form>
                        <div class="d-flex">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label class="form-control-label" for="nama">NIk</label>
                              <input type="text" id="nama" class="form-control" placeholder="NIP" value="99929299129">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-first-name">Jenis Kelamin</label>
                              <input type="text" id="input-first-name" class="form-control"
                                value="Laki Laki">
                            </div>
                          </div>
                        </div>

                        <div class="d-flex">
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-email">No. Telp</label>
                              <input type="text" id="input-telp" class="form-control" value="+6281222383282">
                            </div>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="example-date-input">Tanggal Lahir</label>
                            <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
                          </div>            
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-last-name">Status</label>
                              <input type="text" id="input-last-name" class="form-control" value="Aktif">
                            </div>
                          </div>
                        </div>

                      </form>
                    </div>

                    <!-- tab instansi -->
                    <div class="tab-pane fade" id="instansi" role="tabpanel" aria-labelledby="instansi-tab">
                      <form>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="form-control-label" for="nama">Instansi</label>
                            <input type="text" id="nama" class="form-control" placeholder="Instansi"
                              value="Pemadam Kebakaran">
                          </div>
                        </div>

                        <div class="d-flex">
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-last-name">Provinsi</label>
                              <input type="text" id="input-last-name" class="form-control" placeholder="Kabupaten"
                                value="Bali">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-last-name">Kabupaten</label>
                              <input type="text" id="input-last-name" class="form-control" placeholder="Kabupaten"
                                value="Badung">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-email">Kecamatan</label>
                              <input type="text" id="input-telp" class="form-control" value="Kuta Utara"
                                placeholder="Kecamatan">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

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

  <!-- Modal Edit Petugas -->
  <div class="modal fade bd-example-modal-lg" id="modalEditPetugas" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Petugas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label class="col-form-label-sm">Nama Lengkap</label>
              <input type="text" class="form-control form-control-lg" placeholder="Aditya Mahendra">
            </div>
            <div class="form-group">
              <label class="col-form-label-sm">Nama Pengguna</label>
              <input type="text" class="form-control form-control-lg" disabled placeholder="adityanym">
            </div>

            <div class="form-check mb-1">
              <input class="form-check-input" id="show-password" type="checkbox" value="" onclick="showPassword()">
              <label class="col-form-label-sm" for="flexCheckDefault">
                Ubah Kata Sandi
              </label>
            </div>

            <div style="display:none" id="password">
              <div class="form-row">
                <div class="form-group col-md-4 mb-3">
                  <label class="col-form-label-sm" for="inputEmail4">Kata Sandi Lama</label>
                  <input type="password" class="form-control" id="inputEmail4" placeholder="Kata Sandi Lama">
                </div>
                <div class="form-group col-md-4 mb-3">
                  <label class="col-form-label-sm" for="inputPassword4">Kata Sandi Baru</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Kata Sandi Baru">
                </div>
                <div class="form-group col-md-4 mb-3">
                  <label class="col-form-label-sm" for="inputPassword4">Ulangi Kata Sandi Baru</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Kata Sandi Baru">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-form-label-sm">NIK</label>
              <input type="number" class="form-control form-control-lg" disabled placeholder="1902828474763663">
            </div>
            <div class="form-group row" style="margin-top: 15px;">
              <div class="col-sm-6">
                <label for="jk" class="col-form-label-sm">Jenis Kelamin</label>
                <select disabled class="form-control form-control-lg" id="jk">
                  <option>Pilih Jenis Kelamin</option>
                  <option selected>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="example-date-input">Tanggal Lahir</label>
                <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
              </div>
            </div>

            <div class="form-group row" style="margin-top: 15px;">
              <div class="col-sm-6 mb-sm-0">
                <label class="col-form-label-sm">No. Telp</label>
                <input type="number" class="form-control form-control-lg" placeholder="082937362735">
              </div>
              <div class="col-sm-6">
                <label for="status_aktif" class="col-form-label-sm">Status Akun</label>
                <select class="form-control form-control-lg" id="status_aktif">
                  <option selected disabled>Pilih Status Akun</option>
                  <option>Aktif</option>
                  <option>Tidak Aktif</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-form-label-sm" for="exampleFormControlFile1">Unggah Foto Petugas</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-secondary mr-2">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- modal foto -->
  <div id="mymodal" class="mymodal">
    <div id="mymodal-overlay" class="modal-overlay"></div>
    <button id="mybtn-close-modal" class="btn-close-modal">&times;</button>
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
  <script src="js/show-field.js"></script>

</body>

</html>