<html lang="en">
    <head>
        <title>Expert System Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>fonts/icomoon/style.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/jquery-ui.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/aos.css">
        <link rel="stylesheet" href="<?= base_url('assets/frontend/');?>css/style.css">


    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <div class="site-wrap">
            <div class="site-mobile-menu site-navbar-target">
              <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                  <span class="icon-close2 js-menu-toggle"></span>
                </div>
              </div>
              <div class="site-mobile-menu-body"></div>
            </div>



            <header class="site-navbar py-2 bg-white js-sticky-header site-navbar-target" role="banner">

              <div class="container">
                <div class="row align-items-center">
                  <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="<?= base_url('auth')?>" class="text-black mb-0">HealthMe<span class="text-primary">.</span> </a></h1>
                  </div>
                  <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                      <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="<?= base_url('login/logout') ?>" class="nav-link">Logout</a></li>
                      </ul>
                    </nav>
                  </div>
                  <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

                </div>
              </div>

            </header>

            <div class="site-section bg-light" id="profile">
                <div class="container">
                    <div class="row mb-0 pb-0">
                        <div class="col-12 text-center">
                          <h3 class="section-sub-title">Profile</h3>
                          <h2 class="section-title mt-4 mb-3">Profil Pasien</h2>

                    <!-- <img src="<?= base_url('assets/backend-assets/login/images/images.png');?>" width="200px" height="200px"class="img-thumbnail">
                      -->
                        </div>
                    </div>

                    <div class="row justify-content-center mt-0 pt-0">
                        <div class="col-md-7">
                          <div class="site-section bg-light" id="profile">
                                         <div class="container">
                                             <div class="table-header">
                                             </div>
                                             <div>
                                                 <table class="table table-hover">
                                                     <tr>
                                                         <th style="width: 200px">Nama Pasien</th>
                                                         <th style="width: 30px">:</th>
                                                         <td><?= $listProfile->nama_pengguna?></td>
                                                     </tr>
                                                      <tr>
                                                         <th>Jenis Kelamin</th>
                                                         <th>:</th>
                                                         <td>
                                                             <?php
                                                                 if ($listProfile->jk == "Laki-Laki"){
                                                                     echo "Laki laki";
                                                                 } else {
                                                                     echo "Perempuan";
                                                                 }
                                                             ?>
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <th>Usia</th>
                                                         <th>:</th>
                                                         <td><?= $listProfile->umur?> Tahun</td>
                                                     </tr>
                                                     <tr>
                                                         <th>Email</th>
                                                         <th>:</th>
                                                         <td><?= $listProfile->email?></td>
                                                     </tr>
                                                     <tr>
                                                         <th>Username</th>
                                                         <th>:</th>
                                                         <td><?= $listProfile->username?></td>
                                                     </tr>
                                                     <tr>
                                                         <th>Password</th>
                                                         <th>:</th>
                                                         <td>************</td>
                                                     </tr>
                                                 </table>
                                                 <div>
                                                     <a href="<?= base_url('profile/editProfile/'.$listProfile->id_pengguna);?>" class="btn btn-primary btn-sm">Rubah Profile</a>
                                                     <a href="<?= base_url('riwayatpasien');?>" class="btn btn-warning btn-sm" style="margin-left:240" >Lihat Riwayat Konsultasi</a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                        </div>
                    </div>

                  </div>
              </div>
            <!-- <div cla -->


        </div> <!-- .site-wrap -->

        <script src="<?= base_url('assets/frontend/');?>js/jquery-3.3.1.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery-migrate-3.0.1.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery-ui.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/popper.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/owl.carousel.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery.stellar.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery.countdown.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/bootstrap-datepicker.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery.easing.1.3.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/aos.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery.fancybox.min.js"></script>
        <script src="<?= base_url('assets/frontend/');?>js/jquery.sticky.js"></script>


        <script src="<?= base_url('assets/frontend/');?>js/main.js"></script>

    </body>
</html>
