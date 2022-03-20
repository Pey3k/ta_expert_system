<html lang="en">
    <head>
        <title>Expert System Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/client/');?>fonts/icomoon/style.css">
        <link rel="stylesheet" href="<?= base_url('assets/client/');?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/client/');?>css/jquery-ui.css">
        <link rel="stylesheet" href="<?= base_url('assets/client/');?>css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/client/');?>css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/client/');?>css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/client/');?>css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/client/');?>css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="<?= base_url('assets/client/');?>fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="<?= base_url('assets/client/');?>css/aos.css">
        <link rel="stylesheet" href="<?= base_url('assets/client/');?>css/style.css">


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
                            <li><a href="<?= base_url('profile') ?>" class="nav-link">Profile</a></li>
                            <li><a href="<?= base_url('login/logout') ?>" class="nav-link">Logout</a></li>
                      </ul>
                    </nav>
                  </div>

                  <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

                </div>
              </div>

            </header>

            <div class="site-wrap">
                <div class="site-section bg-light" id="contact-section">

                    <div class="container">

                      <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 text-center">
                        <h3 class="section-sub-title">History</h3>
                        <h3 class="section-title text-black mt-4 mb-4">Riwayat Diagnosa Pasien</h3>
                        </div>
                      </div>

                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <div class="row">
                            <div class="col-md-6">
                              <h6 class="m-0 font-weight-bold text-primary">Riwayat Diagnosa Pasien </h6>
                            </div>
                            <div class="col-md-6">
                              <?php if(!empty($userLogin)){?>
                        <div class="col-12 text-right" >
                                <a href="<?php echo base_url('riwayatpasien/print_pasien/') ?>" target="_blank()">
                                <button type="button" class="btn btn-sm btn-success pull-left" data-dismiss="modal">
                                    <i class="ace-icon fa fa-plus"></i>
                                    Print PDF
                                </button>
                                </a>
                        </div>
                        <?php } ?>
                            </div>
                          </div>

                        </div>

                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                            <col width="20">
                              <thead>
                                <tr>
                                <th  align="center">No</th>
                                      <th  align="center">Nama</th>
                                      <th  align="center">Penyakit</th>
                                      <th  align="center">Tanggal konsultasi</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $no = 0;
                                    foreach($hasil_analisa as $value){
                                     $no++;

                                    ?>

                                      <tr>
                                      <td style="padding:10px;"> <?php echo $no; ?> </td>
                                      <td style="padding:10px;"> <?php echo $value->nama_pengguna; ?> </td>
                                      <td style="padding:10px;"> <?php echo $value->penyakit; ?> </td>
                                      <td style="padding:10px;"> <?= date_format(date_create($value->tglAnalisa),'d F Y'); ?></td>
                                    </tr>
                                    <?php } ?>

                              </tbody>

                            </table>
                          </div>

                          <div class="clearfix form-actions">

                             <div class="col-md-offset-2 col-md-5 pl-0 ml-0">
                             <a href="<?= base_url('diagnosa');?>" class="btn btn-primary btn-sm">
                             Konsultasi Pasien</a>


                                 &nbsp; &nbsp; &nbsp;
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

        <script src="<?= base_url('assets/client/');?>js/jquery-3.3.1.min.js"></script>
        <script src="<?= base_url('assets/client/');?>js/jquery-migrate-3.0.1.min.js"></script>
        <script src="<?= base_url('assets/client/');?>js/jquery-ui.js"></script>
        <script src="<?= base_url('assets/client/');?>js/popper.min.js"></script>
        <script src="<?= base_url('assets/client/');?>js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/client/');?>js/owl.carousel.min.js"></script>
        <script src="<?= base_url('assets/client/');?>js/jquery.stellar.min.js"></script>
        <script src="<?= base_url('assets/client/');?>js/jquery.countdown.min.js"></script>
        <script src="<?= base_url('assets/client/');?>js/bootstrap-datepicker.min.js"></script>
        <script src="<?= base_url('assets/client/');?>js/jquery.easing.1.3.js"></script>
        <script src="<?= base_url('assets/client/');?>js/aos.js"></script>
        <script src="<?= base_url('assets/client/');?>js/jquery.fancybox.min.js"></script>
        <script src="<?= base_url('assets/client/');?>js/jquery.sticky.js"></script>


        <script src="<?= base_url('assets/client/');?>js/main.js"></script>

    </body>
</html>
