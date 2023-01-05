
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BHF | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
	<link href="<?=base_url()?>assets/avilon/img/favicon/ms-icon-150x150.png" rel="icon">
	<link href="<?=base_url()?>assets/avilon/img/favicon/apple-icon-180x180.png" rel="apple-touch-icon">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Data Tables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini" >
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style= "background: linear-gradient(45deg, #1de099, #1dc8cd);">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="<?=site_url('website')?>" class="nav-link">Beranda</a> -->
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>



    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
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
              <img src="<?=base_url()?>assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="<?=base_url()?>assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="<?=base_url()?>assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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


       
      

     <!-- Customize AdminLTE | Hak Akses : Admin -->
     <?php if($this->fungsi->user_login()->level == 'admin') { ?>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-cog"></i>
        </a>
      </li>

  
      <?php } ?>
      



      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-th-large"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- Widget: user widget style 1 -->
          <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-success">
                <h3 class="widget-user-username"><?=ucfirst($this->fungsi->user_login()->nama_lengkap)?></h3>
                <h5 class="widget-user-desc"><?=ucfirst($this->fungsi->user_login()->level)?></h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="<?=base_url('uploads/foto_profil/'.$this->fungsi->user_login()->image); ?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="description-block">
                    <a href="<?=base_url($this->fungsi->user_login()->level.'/profil/'.$this->fungsi->user_login()->id_user); ?>" class="text-success"><i class="fa fa-user"></i> Profil</a><hr style="margin: 5px;">
                    </div>
                    <!-- /.description-block -->
                  </div>
                 
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="description-block">
                      
                      <a href="<?= base_url('auth/logout') ?>" class="text-success"><i class="fa fa-power-off"></i> Sign Out</a><hr style="margin: 5px;">
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4" style= "background: linear-gradient(45deg, #1de099, #1dc8cd);">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style= "background: linear-gradient(45deg, #1de099, #1dc8cd);">
      <img src="<?=base_url()?>assets/dist/img/foto_profil.jpg"
            alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">BHF</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url('uploads/foto_profil/'.$this->fungsi->user_login()->image); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=ucfirst($this->fungsi->user_login()->nama_lengkap)?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class 
          with font-awesome or any other icon font library -->
              <!-- Sidebar Menu ADMIN -->
              <?php if($this->fungsi->user_login()->level == 'admin') { ?>
              <li class="nav-item">
                <a href="<?=site_url('dashboard')?>" <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == "" ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-balance-scale"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <?php } ?>

              <!-- <?php if($this->fungsi->user_login()->level == 'admin') { ?>
              <li class="nav-item">
                <a href="<?=site_url('user')?>" class="nav-link">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Data User</p>
                </a>
              </li>
              <?php } ?> -->

              <?php if($this->fungsi->user_login()->level == 'admin') { ?>
              <li class="nav-item">
                <a href="<?=site_url('sekretariat')?>" <?=$this->uri->segment(1) == 'sekretariat' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Data Sekretariat</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'admin') { ?>
              <li class="nav-item">
                <a href="<?=site_url('klien')?>" <?=$this->uri->segment(1) == 'klien' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Data Klien</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'admin') { ?>
              <li class="nav-item">
                <a href="<?=site_url('konsultan_hukum')?>" <?=$this->uri->segment(1) == 'konsultan_hukum' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Data Konsultan Hukum</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'admin') { ?>
              <li class="nav-item">
                <a href="<?=site_url('admin')?>" <?=$this->uri->segment(1) == 'admin' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Data Admin</p>
                </a>
              </li>
              <?php } ?>
                <!-- End Sidebar Menu ADMIN -->

                <!-- Sidebar Menu Sekretariat -->
                <?php if($this->fungsi->user_login()->level == 'sekretariat') { ?>
              <li class="nav-item">
                <a href="<?=site_url('dashboard')?>" <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == "" ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-balance-scale"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'sekretariat') { ?>
              <li class="nav-item">
                <a href="<?=site_url('konsultasi')?>" <?=$this->uri->segment(1) == 'konsultasi' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon far fa-envelope"></i>
                  <p>Data Konsultasi</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'sekretariat') { ?>
              <li class="nav-item">
                <a href="<?=site_url('produk_hukum')?>" <?=$this->uri->segment(1) == 'produk_hukum' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-gavel"></i>
                  <p>Data Produk Hukum</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'sekretariat') { ?>
              <li class="nav-item">
                <a href="<?=site_url('artikel')?>" <?=$this->uri->segment(1) == 'artikel' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-newspaper"></i>
                  <p>Data Artikel</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'sekretariat') { ?>
              <li class="nav-item">
                <a href="<?=site_url('agenda')?>" <?=$this->uri->segment(1) == 'agenda' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>Data Agenda</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'sekretariat') { ?>
              <li class="nav-item">
                <a href="<?=site_url('foto')?>" <?=$this->uri->segment(1) == 'foto' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon far fa-images"></i>
                  <p>Data Foto</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'sekretariat') { ?>
              <li class="nav-item">
                <a href="<?=site_url('tanggapan')?>" <?=$this->uri->segment(1) == 'tanggapan' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-comments"></i>
                  <p>Chat</p>
                </a>
              </li>
              <?php } ?>

              
              <!-- End Sidebar Menu Sekretariat-->

              <!-- Sidebar Menu Klien -->
              <?php if($this->fungsi->user_login()->level == 'klien') { ?>
              <li class="nav-item">
                <a href="<?=site_url('dashboard')?>" <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == "" ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-balance-scale"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'klien') { ?>
              <li class="nav-item">
                <a href="<?=site_url('konsultasi_klien')?>" <?=$this->uri->segment(1) == 'konsultasi_klien' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon far fa-envelope"></i>
                  <p>Konsultasi</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'klien') { ?>
              <li class="nav-item">
                <a href="<?=site_url('tanggapan')?>" <?=$this->uri->segment(1) == 'tanggapan' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-comments"></i>
                  <p>Chat</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'klien') { ?>
              <li class="nav-item">
                <a href="<?=site_url('jadwal')?>" <?=$this->uri->segment(1) == 'jadwal' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-calendar-plus"></i>
                  <p>Jadwal</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'klien') { ?>
              <li class="nav-item">
                <a href="<?=site_url('telepon')?>" <?=$this->uri->segment(1) == 'telepon' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-phone"></i>
                  <p>Telepon</p>
                </a>
              </li>
              <?php } ?>
              
              <!-- End Sidebar Menu Klien-->

              <!-- Sidebar Menu Konsultan Hukum -->
              <?php if($this->fungsi->user_login()->level == 'konsultan_hukum') { ?>
              <li class="nav-item">
                <a href="<?=site_url('dashboard')?>"  <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == "" ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-balance-scale"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'konsultan_hukum') { ?>
              <li class="nav-item">
                <a href="<?=site_url('konsultasi_konsultan_hukum')?>" <?=$this->uri->segment(1) == 'konsultasi_konsultan_hukum' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon far fa-envelope"></i>
                  <p>Data Konsultasi</p>
                </a>
              </li>
              <?php } ?>
             

              <?php if($this->fungsi->user_login()->level == 'konsultan_hukum') { ?>
              <li class="nav-item">
                <a href="<?=site_url('tanggapan')?>" <?=$this->uri->segment(1) == 'tanggapan' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon far fa-comments"></i>
                  <p>Chat</p>
                </a>
              </li>
              <?php } ?>

              <?php if($this->fungsi->user_login()->level == 'konsultan_hukum') { ?>
              <li class="nav-item">
                <a href="<?=site_url('jadwal')?>" <?=$this->uri->segment(1) == 'jadwal' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                  <i class="nav-icon fas fa-map-marked-alt"></i>
                  <p>Jadwal Pertemuan</p>
                </a>
              </li>
              <?php } ?>
              <!-- End Sidebar Menu Klien-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php echo $contents ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0-rc.3
    </div>
    <strong>Copyright &copy; 2019 <a href="<?=site_url('website')?>">Bantuan Hukum Front</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>


<!-- Data Tables -->
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.js"></script>
<!-- Data Tables -->
<script src="<?=base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
$(document).ready(function(){
  $('#table1').DataTable()

})
</script>


</body>
</html>
