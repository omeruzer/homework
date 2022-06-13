<!DOCTYPE html>
<html lang="en">

<head>
    <title>Yönetim Paneli</title>
    <meta name="description" content="Dashboard | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/985961917925453836/985974421086937128/unknown.png" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <link href="/adminAssets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="/adminAssets/assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="/adminAssets/assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="/adminAssets/assets/plugins/chart.js/Chart.min.css" />
    <link rel="stylesheet" type="text/css" href="/adminAssets/assets/plugins/datatables/datatables.min.css" />
    @yield('head')
    <!-- END CSS for this page -->
</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="index.html" class="logo">
                    <span>ISUCafetaries</span>
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
                            <a href="{{ route('admin.home') }}">
                                <i class="fa fa-home"></i>
                                <span> Anasayfa </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{ route('admin.product') }}">
                                <i class="fa fa-list"></i>
                                <span> Ürünler </span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="{{ route('admin.category') }}">
                                <i class="fa fa-list"></i>
                                <span> Kategoriler </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{ route('admin.order') }}">
                                <i class="fa fa-shopping-cart"></i>
                                <span> Siparişler </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{ route('admin.setting') }}">
                                <i class="fa fa-wrench"></i>
                                <span> Ayarlar </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{ route('admin.logout') }}">
                                <i class="fa fa-arrow-right"></i>
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

        @yield('content')

        <footer class="footer">
            <span class="text-right">
                Copyright <a target="_blank" href="#">İSÜ</a>
            </span>
            <span class="float-right">
                <!-- Copyright footer link MUST remain intact if you download free version. -->
                <!-- You can delete the links only if you purchased the pro or extended version. -->
                <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
                Powered by <a target="_blank" href="#" title="Download free Bootstrap templates"><b>isü</b></a>
            </span>
        </footer>

        <script src="/adminAssets/assets/js/modernizr.min.js"></script>
        <script src="/adminAssets/assets/js/jquery.min.js"></script>
        <script src="/adminAssets/assets/js/moment.min.js"></script>

        <script src="/adminAssets/assets/js/popper.min.js"></script>
        <script src="/adminAssets/assets/js/bootstrap.min.js"></script>

        <script src="/adminAssets/assets/js/detect.js"></script>
        <script src="/adminAssets/assets/js/fastclick.js"></script>
        <script src="/adminAssets/assets/js/jquery.blockUI.js"></script>
        <script src="/adminAssets/assets/js/jquery.nicescroll.js"></script>

        <!-- App js -->
        <script src="/adminAssets/assets/js/admin.js"></script>

    </div>
    <!-- END main -->

    <!-- BEGIN Java Script for this page -->
    <script src="/adminAssets/assets/plugins/chart.js/Chart.min.js"></script>
    <script src="/adminAssets/assets/plugins/datatables/datatables.min.js"></script>

    <!-- Counter-Up-->
    <script src="/adminAssets/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="/adminAssets/assets/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- dataTabled data -->
    <script src="/adminAssets/assets/data/data_datatables.js"></script>

    <!-- Charts data -->
    <script src="/adminAssets/assets/data/data_charts_dashboard.js"></script>
    @yield('footer')
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
