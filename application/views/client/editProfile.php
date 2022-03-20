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
                           <li><a href="<?= base_url('login/logout') ?>" class="nav-link">Keluar</a></li>
                     </ul>
                    </nav>
                  </div>

                  <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

                </div>
              </div>

            </header>

            <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Edit Profile</h3>
            <h2 class="section-title mb-3">Edit Profil Pasien</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5">

            <form action="<?= base_url('profile/doUpdate/'.$this->uri->segment(3));?>" method="post" class="p-5 bg-white">

              <h2 class="h4 text-black mb-5">Ubah data diri anda :</h2>

     			  <div class="row form-group">
                     <div class="col-md-12">
                       <label class="text-black" for="nama_lengkap">Nama Lengkap</label>
                       <input value="<?= $detailData->nama_pengguna?>" type="text" id="nama" name="nama" class="form-control rounded-0" required>
                     </div>
                   </div>

     			  <div class="row form-group">
                     <div class="col-md-6">
                       <label class="text-black" for="umur">Umur </label>
                       <input value="<?= $detailData->umur?>" type="number" id="umur" name="umur" class="form-control rounded-0">
                     </div>

     				<div class="col-md-6">
     					<label   class="text-black" for="jk">Jenis Kelamin</label>
                             <select name="jk" id="jk" class="form-control rounded-0" required  value="<?= $detailData->jk?>">
                               <option value="Laki-Laki" <?php if ($detailData->jk == "Laki-Laki"){ echo "selected";}?>>Laki-laki</option>
                                <option value="Perempuan" <?php if ($detailData->jk == "Perempuan"){ echo "selected";}?>>Perempuan</option>
                             </select>
                     </div>

                   </div>

     			  <div class="row form-group">
                     <div class="col-md-12">
                       <label class="text-black" for="email">Email</label>
                       <input  value="<?= $detailData->email?>" type="email" id="email" name="email" class="form-control rounded-0">
                     </div>
                   </div>

                    <div class="row form-group">
                     <div class="col-md-12">
                       <label class="text-black" for="username">Username</label>
                       <input  value="<?= $detailData->username?>" type="text" id="username" name="username" class="form-control rounded-0" required>
                     </div>
                   </div>



                   <div class="row form-group">
                     <div class="col-md-12 mt-4 ml-1">
                        <input type="submit" value="Simpan" class="btn btn-primary rounded-0 py-3 px-4 mr-4">
                        <button href="<?= base_url('profile') ?>"  class="btn btn-danger rounded-0 py-3 px-4">Batal</button>
                     </div>
                   </div>
            </form>

          </div>

        </div>

      </div>
    </div>


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
