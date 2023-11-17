<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="../view/img/brands/z4871992908279_16a19fc978221fc75541dc94d278ae60-removebg-preview (1).png"
		type="image/x-icon">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/cssty.css">
    <script src="dist/js.js"></script>

    <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .navbar-brand-ve-website {
            margin-left: auto;
        }
    </style>
    
    

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.php">
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="assets/images/z4850441585797_0e1edcba21b9aefe75f9b693eb8dbe29__1_-removebg-preview.png" alt="homepage" class="light-logo" style="width: 130px;height: 40px;">
                        </span>
                    </a>  
                </div>
                    <a class="navbar-brand navbar-brand-ve-website" href="../view/index.php">
                        <span class="">
                    <button class="btn"><strong>Về Website</strong></button>
                        </span>
                     </a>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php"
                                aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Trang Chủ</span></a></li>


                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Danh Mục</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php?act=adddm" class="sidebar-link"><i
                                            class="mdi mdi-note-outline"></i><span class="hide-menu"> Thêm Danh Mục
                                        </span></a></li>
                                <li class="sidebar-item"><a href="index.php?act=listdm" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu"> Danh Sách Danh Mục
                                        </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                    class="hide-menu">Sản Phẩm</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php?act=addsp" class="sidebar-link"><i
                                            class="mdi mdi-emoticon"></i><span class="hide-menu"> Thêm Sản
                                            Phẩm</span></a></li>
                                <li class="sidebar-item"><a href="index.php?act=listsp" class="sidebar-link"><i
                                            class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Danh sách sản
                                            phẩm </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                                    class="hide-menu">Khách Hàng </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php?act=listtk" class="sidebar-link"><i
                                            class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Danh sách </span></a>
                                </li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i
                                            class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Bình Luận
                                </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php?act=listbl" class="sidebar-link"><i
                                            class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Danh sách bình luận
                                        </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span
                                    class="hide-menu">Đơn Hàng</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php?act=listdh" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Danh sách đơn hàng
                                        </span></a></li>
                            </ul>
                        </li>       

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Thống kê
                                </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php?act=thongke" class="sidebar-link"><i
                                            class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Bảng thống kê
                                        </span></a></li>
                                <li class="sidebar-item"><a href="index.php?act=bieudo" class="sidebar-link"><i class="mdi mdi-chart-bar"></i><span class="hide-menu"> Biểu đồ
                                        </span></a></li>
                            </ul>
                                
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                    class="hide-menu">Voucher</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php?act=addvc" class="sidebar-link"><i
                                            class="mdi mdi-emoticon"></i><span class="hide-menu">Thêm voucher</span></a></li>
                                <li class="sidebar-item"><a href="index.php?act=listvc" class="sidebar-link"><i
                                            class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Danh sách voucher</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->

        </aside>
        <div class="page-wrapper">

        </div>


    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->

    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>



    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>

    <script src="dist/js/pages/chart/chart-page-init.js"></script>



</body>

</html>