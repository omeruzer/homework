<!DOCTYPE html>
<html lang="en">

<head>
    <title>Yönetim Paneli</title>
    <meta name="description" content="Dashboard | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="adminAssets/assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="adminAssets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="adminAssets/assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="adminAssets/assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="adminAssets/assets/plugins/chart.js/Chart.min.css" />
    <link rel="stylesheet" type="text/css" href="adminAssets/assets/plugins/datatables/datatables.min.css" />
    <!-- END CSS for this page -->
</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="index.html" class="logo">
                    <img alt="Logo" src="adminAssets/assets/images/logo.png" />
                    <span>Nura Admin</span>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>
            </nav>

        </div>
        <!-- End Navigation -->

        <!-- Left Sidebar -->
        <div class="left main-sidebar">

            <div class="sidebar-inner leftscroll">

                <div id="sidebar-menu">

                    <ul>
                        <li class="submenu">
                            <a class="active" href="#">
                                <span> Merhaba Dükkan Adı </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="users.html">
                                <i class="fas fa-user"></i>
                                <span> Anasayfa </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="blog.html">
                                <i class="fas fa-file-alt"></i>
                                <span> Kategoriler </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="mail-all.html">
                                <i class="fas fa-envelope"></i>
                                <span> Siparişler </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="slider.html">
                                <i class="fas fa-photo-video"></i>
                                <span> Çıkış Yap </span>
                            </a>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>
        <!-- End Sidebar -->

        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Anasayfa</h1>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-danger">
                                <i class="far fa-user float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Users</h6>
                                <h1 class="m-b-20 text-white counter">487</h1>
                                <span class="text-white">12 Today</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-purple">
                                <i class="fas fa-download float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Downloads</h6>
                                <h1 class="m-b-20 text-white counter">290</h1>
                                <span class="text-white">12 Today</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-warning">
                                <i class="fas fa-shopping-cart float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Orders</h6>
                                <h1 class="m-b-20 text-white counter">320</h1>
                                <span class="text-white">25 Today</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-info">
                                <i class="far fa-envelope float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Messages</h6>
                                <h1 class="m-b-20 text-white counter">58</h1>
                                <span class="text-white">5 New</span>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

        <footer class="footer">
            <span class="text-right">                
                Copyright <a target="_blank" href="#">Company</a>
            </span>
            <span class="float-right">
                <!-- Copyright footer link MUST remain intact if you download free version. -->
                <!-- You can delete the links only if you purchased the pro or extended version. -->
                <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
                Powered by <a target="_blank" href="https://bootstrap24.com" title="Download free Bootstrap templates"><b>Bootstrap24.com</b></a>
            </span>
        </footer>

        <script src="adminAssets/assets/js/modernizr.min.js"></script>
        <script src="adminAssets/assets/js/jquery.min.js"></script>
        <script src="adminAssets/assets/js/moment.min.js"></script>

        <script src="adminAssets/assets/js/popper.min.js"></script>
        <script src="adminAssets/assets/js/bootstrap.min.js"></script>

        <script src="adminAssets/assets/js/detect.js"></script>
        <script src="adminAssets/assets/js/fastclick.js"></script>
        <script src="adminAssets/assets/js/jquery.blockUI.js"></script>
        <script src="adminAssets/assets/js/jquery.nicescroll.js"></script>

        <!-- App js -->
        <script src="adminAssets/assets/js/admin.js"></script>

    </div>
    <!-- END main -->

    <!-- BEGIN Java Script for this page -->
    <script src="adminAssets/assets/plugins/chart.js/Chart.min.js"></script>
    <script src="adminAssets/assets/plugins/datatables/datatables.min.js"></script>

    <!-- Counter-Up-->
    <script src="adminAssets/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="adminAssets/assets/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- dataTabled data -->
    <script src="adminAssets/assets/data/data_datatables.js"></script>

    <!-- Charts data -->
    <script src="adminAssets/assets/data/data_charts_dashboard.js"></script>
    <script>
        $(document).on('ready', function() {
            // data-tables
            $('#dataTable').DataTable({
                data: dataSet,
                columns: [{
                    title: "Name"
                }, {
                    title: "Position"
                }, {
                    title: "Office"
                }, {
                    title: "Extn."
                }, {
                    title: "Date"
                }, {
                    title: "Salary"
                }]
            });

            // counter-up
            $('.counter').counterUp({
                delay: 10,
                time: 600
            });
        });
    </script>
    <!-- END Java Script for this page -->

</body>

</html>