<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="icon" href="<?php echo base_url(); ?>assets/deeniyat/image/logo/deeniyat.png" type="image/x-icon" />
	<link href="<?php echo base_url(); ?>assets/ckeditor/contents.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/adminlte/dist/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url(); ?>assets/adminlte/dist/css/AdminLTE.min.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url(); ?>assets/adminlte/dist/css/skins/_all-skins.min.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url(); ?>assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> -->
	<link href="<?php echo base_url(); ?>assets/alertifyjs/css/alertify.min.css" rel="stylesheet" >
	<link href="<?php echo base_url(); ?>assets/alertifyjs/css/themes/default.min.css" rel="stylesheet" >

 <!-- Javascripts-->
	<!-- <script src="<?php echo base_url();?>asset/jquery.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/adminlte/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url(); ?>assets/ckfinder/ckfinder.js"></script>
	<script src="<?php echo base_url(); ?>assets/adminlte/dist/js/app.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/alertifyjs/alertify.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/datatables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/datatables/DataTables-1.10.18/js/dataTables.bootstrap.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.7/jquery.autocomplete.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script>
	<script src="<?php echo base_url(); ?>assets/highcharts/modules/series-label.js"></script>
	<script src="<?php echo base_url(); ?>assets/highcharts/modules/exporting.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/icon_fontawesome.js"></script>
	<!--script src="<?php echo base_url(); ?>assets/highcharts/themes/grid-light.js"></script-->
	<!-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script> -->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>BW</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
					<!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/adminlte/dist/img/avatar5.png'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">
								<?php
					        $user = $this->db->where('id', $this->session->userdata('id'))
					                  ->get('admin')->row();
					        echo $user->nama;
					      ?>
							</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/adminlte/dist/img/avatar5.png'); ?>" class="img-circle" alt="User Image">

                <p>
									<?php
						        echo $user->nama;
						      ?>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('Setting'); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('Datacenter/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
				<li>
          <a href="<?php echo site_url(); ?>" target="_blank">
            <i class="fa fa-globe" aria-hidden="true"></i> <span>Lihat Website</span>
          </a>
        </li>
        <li class="header">MASTER MENU</li>
        <li class="<?php echo $subtitle=='dashboard'?'active':''; ?>">
          <a href="<?php echo site_url('Dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
				<li class="treeview
					<?php
						if($subtitle == 'profile_web') {
							echo "active";
						}
					?>
				">
          <a href="">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <span>Menu Web <?php // echo $subtitle; ?></span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
						<li class="<?php echo $subtitle=='profile_web'?'active':''; ?>"><a href="<?php echo site_url('Profil_web'); ?>"><i class="fa fa-circle-o"></i> Profil Web</a></li>
						<li class="<?php echo $subtitle=='slider'?'active':''; ?>"><a href="<?php echo site_url('Slider'); ?>"><i class="fa fa-circle-o"></i> Photo Slider</a></li>
          </ul>
        </li>
        <li class="<?php echo $subtitle=='pengaduan'?'active':''; ?>">
          <a href="<?php echo site_url('Pengaduans'); ?>">
            <i class="fa fa-address-book" aria-hidden="true"></i> <span>Pengaduan</span>
            <small class="label pull-right bg-red">
              <?php
                $cek=$this->db->where('status', 0)->get('pengaduan')->result();
                echo count($cek);
              ?>
            </small>
          </a>
        </li>
				<?php
					if($this->session->userdata('hak_akses') == 1) {
				?>
				<li class="<?php echo $subtitle=='user'?'active':''; ?>">
          <a href="<?php echo site_url('Users'); ?>">
            <i class="fa fa-user"></i> <span>Users</span>
          </a>
        </li>
				<?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"style="min-height: 550px">
    <!-- Content Header (Page header) -->

	<?php echo $content; ?>



  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.3
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

</div>
</body>
</html>
