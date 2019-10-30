<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To PPOB Pembayaran</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url() ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url() ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url() ?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url() ?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">PPOB - Alfia Teresia</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url() ?>assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                    <div class="email"><?=$this->session->userdata('nama_admin'); ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo base_url('index.php/login/logout'); ?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
            <?php
			    if($this->session->userdata('id_level') ==1) :
		    ?>
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/pelanggan'); ?>">
                            <i class="material-icons">list</i>
                            <span>Data Pelanggan</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/typography.html">
                            <i class="material-icons">assignment_turned_in</i>
                            <span>Verifikasi dan validasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">assignment</i>
                            <span>Generate Laporan</span>
                        </a>
                    </li>
                    <?php
			            elseif($this->session->userdata('id_level') ==2) :
                    ?>
                    <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/typography.html">
                            <i class="material-icons">assignment</i>
                            <span>Generate Laporan</span>
                        </a>
                    </li>
                    <?php elseif ($this->session->userdata('id_level') == 3) : ?>
                    <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                     <li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/typography.html">
                            <i class="material-icons">payment</i>
                            <span>Pembayaran</span>
                        </a>
                    </li>

                    <?php endif ; ?>
                
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">Alfia Teresia Nuraini - XII-RPL 2</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
    <section class="content">
    <?php
		$this->load->view($main_view);
	?>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url() ?>assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url() ?>assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url() ?>assets/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo base_url() ?>assets/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>assets/js/admin.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>assets/js/demo.js"></script>
</body>

</html>