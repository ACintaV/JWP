<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>M Muslih Amirudin - JWD 2020</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="images/icon/19.jpg" alt="M Muslih Amirudin" />
                    </div>
                    <h4 class="name">M Muslih Amirudin</h4>
                    <a href="#">Junior Web Developer</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="segitiga_form.php">
                                <i class="fas fa-eject"></i>Segitiga
                            </a>
                        </li>
                        <li>
                            <a href="persegi_form.php">
                                <i class="fas fa-square"></i>Persegi
                            </a>
                        </li>
                        <li>
                            <a href="lingkaran_form.php">
                                <i class="fas fa-circle"></i>Lingkaran
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="name">APLIKASI PERHITUNGAN BANGUN RUANG (Segitiga, Persegi & Lingkaran). Selamat Datang Siswa Seluruh Dunia!
                                        <br>
                                        Lakukan menghitung luas bangun  datar secara ‘gratis’ dengan imbalan berupa rekaman data yang telah diinputkan. 
                                        <br>
                                        Bangun datar yang didukung adalah segitiga, persegi, dan lingkaran
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <?php 
							        //untuk menjumlahkan berapa kali melakukan hitungan pada sistem
							        include('koneksi_basisdata.php');
							        $queryhitung = mysqli_query($koneksi, "SELECT SUM(jumlah) FROM bangun_ruang");
							        $data2=mysqli_fetch_array($queryhitung);
                                    $sum= $data2['SUM(jumlah)']; 
                                    ?> 
                                    <h2 class="number"><?= $sum ?> KALI </h2>
                                    <span class="desc">Jumlah Perhitungan</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <?php 
							        
                                    include('koneksi_basisdata.php'); //koneksi basisdata
                                    $queryalltot = mysqli_query($koneksi, "SELECT  SUM(jumlah) FROM bangun_ruang");//query menghitung keseluruhan jumlah bangun_ruang (segitiga, persegi & lingkaran)
                                    $datasemuabr=mysqli_fetch_array($queryalltot);
                                    $totsemua= $datasemuabr['SUM(jumlah)'];
								
                                    $querytotsegitiga = mysqli_query($koneksi, "SELECT  jumlah FROM bangun_ruang WHERE bangun_ruang='segitiga'");//uery mengetahui jumlah segitiga
                                    $datasegitiga=mysqli_fetch_array($querytotsegitiga);
                                    $totsegitiga= $datasegitiga['jumlah'];
                                    
                                    $persensegitiga = round((($totsegitiga / $totsemua) * 100),2);//untuk menghitung persentase perhitungan segitiga
                                    ?> 
                                    <h2 class="number"><?= $persensegitiga ?> %</h2>
                                    <span class="desc">Persentase Hitungan Segitiga</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-eject"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                     <?php 
							        
                                    include('koneksi_basisdata.php'); //koneksi basisdata
                                    $queryalltot = mysqli_query($koneksi, "SELECT  SUM(jumlah) FROM bangun_ruang");//query menghitung keseluruhan jumlah bangun_ruang (segitiga, persegi & lingkaran)
                                    $datasemuabr=mysqli_fetch_array($queryalltot);
                                    $totsemua= $datasemuabr['SUM(jumlah)'];
								
                                    $querytotpersegi = mysqli_query($koneksi, "SELECT  jumlah FROM bangun_ruang WHERE bangun_ruang='persegi'");//uery mengetahui jumlah persegi
                                    $datapersegi=mysqli_fetch_array($querytotpersegi);
                                    $totpersegi= $datapersegi['jumlah'];
                                    
                                    $persenpersegi = round((($totpersegi / $totsemua) * 100),2);//untuk menghitung persentase perhitungan persegi
                                    ?> 
                                    <h2 class="number"><?= $persenpersegi?> %</h2>
                                    <span class="desc">Persentase Hitungan Persegi</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-stop"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                     <?php 
							        
                                    include('koneksi_basisdata.php'); //koneksi basisdata
                                    $queryalltot = mysqli_query($koneksi, "SELECT  SUM(jumlah) FROM bangun_ruang");//query menghitung keseluruhan jumlah bangun_ruang (segitiga, persegi & lingkaran)
                                    $datasemuabr=mysqli_fetch_array($queryalltot);
                                    $totsemua= $datasemuabr['SUM(jumlah)'];
								
                                    $querytotlingkaran = mysqli_query($koneksi, "SELECT  jumlah FROM bangun_ruang WHERE bangun_ruang='lingkaran'");//uery mengetahui jumlah lingkaran
                                    $datalingkaran=mysqli_fetch_array($querytotlingkaran);
                                    $totlingkaran= $datalingkaran['jumlah'];
                                    
                                    $persenlingkaran = round((($totlingkaran / $totsemua) * 100),2);//untuk menghitung persentase perhitungan lingkaran
                                    ?> 
                                    <h2 class="number"><?= $persenlingkaran ?> %</h2>
                                    <span class="desc">Persentase Hitungan Lingkaran</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">Riwayat Hasil Perhitungan Segitiga</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                        <input type="button" value="Lihat Riwayat" class="btn btn-lg btn-danger btn-block" onclick="window.location.href='file/segitiga_luas.txt'" /><hr>
                                            <p>Silakan Klik Tombol di atas untuk melakukan lihat riwayat perhitungan Segitiga Anda</p> <!-- Hasil Perhitungan Luas Lingkaran-->
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">Riwayat Hasil Perhitungan Persegi</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                        <input type="button" value="Lihat Riwayat" class="btn btn-lg btn-success btn-block" onclick="window.location.href='file/persegi_luas.txt'" /><hr>
                                            <p>Silakan Klik Tombol di atas untuk melakukan lihat riwayat perhitungan Persegi Anda</p> <!-- Hasil Perhitungan Luas Lingkaran-->
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">Riwayat Hasil Perhitungan Lingkaran</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                        <input type="button" value="Lihat Riwayat" class="btn btn-lg btn-primary btn-block" onclick="window.location.href='file/lingkaran_luas.txt'" /><hr>
                                            <p>Silakan Klik Tombol di atas untuk melakukan lihat riwayat perhitungan Lingkaran Anda</p> <!-- Hasil Perhitungan Luas Lingkaran-->
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
            <!-- END STATISTIC-->

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
