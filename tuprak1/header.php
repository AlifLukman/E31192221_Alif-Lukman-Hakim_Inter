<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../template/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/fontawesome-free-5.15.1-web/css/all.min.css">

    <title>Taufik Hidayat</title>
  </head>
  <body page-top>

    <?php session_start(); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top" id="mainNav">
        <a class="navbar-brand font-weight-bold text-white" href="#page-top">TJ|TAUFIK JUICE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="dashboard.php">Taufik Juice <span class="sr-only">(current)</span></a>
                </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#kategori" id="dropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item " href="original.php">Original</a>
                            <a class="dropdown-item " href="mix.php">Mix</a>
                        </li>

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
                                    <button class="btn btn-danger" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle"  id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                                <i class="fas fa-cart-plus" style="color : white"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in "
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header "> Alerts Center
                                </h6>
                                <div class="modal-footer">
                                </div>
                                <div class="modal-body">Login untuk melihat notifikasi</div>
                                <div class="modal-footer">
                                    <a class="btn btn-primary" href="login.php">LOGIN</a>
                                    <a class="btn btn-primary" href="register.php">DAFTAR</a>
                                </div>
                            </div>
                        </li>

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-white" href="login.php">Masuk/Daftar <span class="sr-only">(current)</span></a>
                            </li>
                            </div>
                        </div>
                    </div>
                </nav>