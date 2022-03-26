<html lang="en">
<head>
	<title>Expert System Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/jquery-ui.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/aos.css">
	<link rel="stylesheet" href="<?= base_url('assets/client/'); ?>css/style.css">


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
					<h1 class="mb-0 site-logo"><a href="<?= base_url('auth') ?>" class="text-black mb-0">WAOS</a></h1>
				</div>
				<div class="col-12 col-md-10 d-none d-xl-block">
					<nav class="site-navigation position-relative text-right" role="navigation">

						<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
							<li><a href="<?= base_url('auth') ?>" class="nav-link">Beranda</a></li>
							<li><a href="<?= base_url('auth/#tentang-kami-section') ?>" class="nav-link">Tentang
									Kami</a></li>
							<li><a href="<?= base_url('auth/#pola-hidup-section') ?>" class="nav-link">Pola Hidup
									Sehat</a></li>
							<li><a href="<?= base_url('auth/#penyakit-section') ?>" class="nav-link">Penyakit</a></li>

						</ul>
					</nav>
				</div>

				<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
							href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span
								class="icon-menu h3"></span></a></div>

			</div>
		</div>

	</header>

	<div class="site-section bg-light" id="login">
		<div class="container mt-5">
			<div class="row mb-0">
				<div class="col-12 text-center mb-2">

					<h2 class="section-title mb-2">Pola Gizi Seimbang</h2>
				</div>
			</div>

			<!-- <div class="row justify-content-center">

                        <div class="col-12-md-7 mb-2">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">

                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="<?= base_url('assets/images/polamakan/gambar1.png'); ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?= base_url('assets/images/polamakan/gambar2.png'); ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?= base_url('assets/images/polamakan/gambar3.png'); ?>" alt="Third slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon mr-5" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon ml-5" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                          </div>

                          <hr>



                        </div>
                    </div> -->
			<div class="bg-white py-4 mb-4" id="faktor-obesitas-section">
				<!-- <div class="col-12 text-center" data-aos="fade" data-aos-delay="100">
				  <h2 class="section-title mb-5">Pola Gizi Seimbang</h2>
				</div> -->

				<div class="row">
					<div class="col-md-6 col-lg-4 mb-5 mb-lg-0 " data-aos="fade" data-aos-delay="100">
						<div class="person text-center">
							<img src="<?= base_url('assets/images/polahidup/gizi/gambar2.jpg'); ?>" alt="Image"
								 class="img-fluid img-thumbnail rounded w-75 mb-3">
							<h2 class="text-black font-weight-bold">4 Sehat 5 Sempurna</h2>
							<p class="mb-4 pl-2 pr-2" align="justify" style="font-size:14px">
								4 sehat 5 sempurna merupakan sebuah pola makan yang mencangkup seluruh zat gizi yang
								diperlukan oleh tubuh dalam jenis makanan yang berbeda. Pola makan tersebut memiliki
								manfaat yang sangat berguna bagi tubuh dan kesehatan. Makanan tersebut terdiri dari
								makanan pokok, lauk pauk, sayur dan buah dan susu. Makanan pokok menjadi sumber energi
								bagi tubuh dengan batasan porsi yang sesuai dengan kebutuhan. Lauk pauk merupakan zat
								pembangun untuk tubuh yang dapat didapatkan dalam bentuk nabati maupun hewani, dagin
								ayam , sapi dan ikan merupakan sumber hewani, sedangkan tahu, tempe dan kacang merupakan
								sumber nabati. Sayur dan buah menjadi sumber vitamin bagi tubuh dan susu untuk
								pertumbuhan bagi tubuh terutama tulang.</p>

							<hr>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
						<div class="person text-center">
							<img src="<?= base_url('assets/images/polahidup/gizi/gambar3.jpg'); ?>" alt="Image"
								 class="img-fluid img-thumbnail rounded w-75 mb-3">
							<h2 class="text-black font-weight-bold">Asupan Kalori</h2>
							<p class="mb-4 pl-2 pr-2" align="justify" style="font-size:14px">
								Kebutuhan kalori setiap individu memiliki perbedaan masing – masing tergantung individu
								tersebut. Beberapa faktor yang mempengaruhi asupan kalori dalam tubuh seperti gaya
								hidup, genetik, pola diet, usia dan jenis kelamin. Asupan kalori secara umum rata – rata
								2.500 kalori setiap hari untuk laki – laki dan 2.000 kalori untuk perempuan. Jumlah
								tersebut juga masih tergantung dengan aktivitas yang dilakukan orang tersebut.
								Pembakaran kalori juga perlu dilakukan untuk menurunkan berat badan sehingga kalori
								tidak berubah menjadi tumpukan lemak. Hal tersebut berpengaruh juga dengan pola diet
								yang dilakukan oleh setiap individu. Beberapa hal yang dapat dilakukan untuk menjaga
								asupan kalori seperti mengurangi asupan karbohidrat, menghindari makanan atau minuman
								mengandung gula, minum air putih minimal 2 liter setiap hari dan mlakukan olahraga rutin
								untuk mempertahankan massa otot.</p>
							<hr>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
						<div class="person text-center">
							<img class="img-fluid img-thumbnail rounded w-75 mb-3"
								 src="<?= base_url('assets/images/polahidup/gizi/gambar1.jpg'); ?>" alt="Image">
							<h2 class="text-black font-weight-bold">Waktu Makan</h2>
							<p class="mb-4 pl-2 pr-2" align="justify" style="font-size:14px">Jam makan juga wajib
								diperhatikan untuk menunjang pola gizi yang seimbang. Waktu makan yang ideal terdiri
								dari sarapan, makan siang dan makan malam meskipun hal tersebut sering tidak
								diperhatikan oleh remaja. Sarapan atau makan pagi merupakan hal yang penting untuk
								memberikan energi selama beraktivitas. Sarapa paling ideal dilakukan 30 menit setelah
								bangun tidur pada rentang jam 07.00 – 10.00 pagi. Waktu yang tepat untuk makan siang
								yaitu pukul 12.30 – 14.00 siang dan tidak dianjurkan makan setelah pukul 16.00, karena
								jarak ideal untuk memproses makanan dalam pencernaan yaitu 4 jam. Pastikan makan siang
								terdiri dari makanan yang mengandung nutrisi lengkap seperti 4 sehat 5 sempurna. Makan
								malam bukan berarti dapat menambah berat badan semakin cepat, perut yang lapar dimalam
								hari justru membuat tubuh tidak bisa untuk berisitrahat. Waktu yang tepat untuk makan
								pada malam hari ialah pada pukul 18.00 – 21.00 dengan pilihan makanan yang penuh nutrisi
								vitamin seperti buah dan sayur, salad, capcay. Pastikan sebelum tidur, makanan telah di
								cerna oleh tubuh yaitu 3 jam sebelum tidur agar dicerna dengan tuntas dan tidak
								menyebabkan kenaikan asam lambung. </p>
							<hr>

						</div>
					</div>
				</div>
				<br>

			</div>
			<!-- <div class="bg-white py-4 mb-4">
                      <div class="row mx-4 my-4 mb-0 product-item-2 align-items-start">
                        <h2 class="section-title mb-1 ml-3">4 Sehat 5 Sempurna</h2>
                      </div>

                      <div class="row mx-4 my-4  product-item-2 align-items-start">
                        <div class="col-md-12 mb-5 mb-md-0">
                            <img src="<?= base_url('assets/images/polahidup/coba.jpg'); ?>" alt="Image" class="img-fluid img-thumbnail">
                        </div>


                        <!-- <div class="col-md-6 mb-5 mb-md-0">
                            <img src="<?= base_url('assets/images/polahidup/polamakan.jpg'); ?>" alt="Image" class="img-fluid img-thumbnail">
                        </div>

                        <div class="col-md-5 ml-auto product-title-wrap">
                          <span class="number">01.</span>
                          <h3 class="text-black mb-4 font-weight-bold">Pola Gizi Seimbang</h3>
                          <p class="mb-4" align="justify">
                          Pola hidup yang benar merupakan sebuah gaya hidup yang mempengaruhi kesehatan manusia. Pola hidup tersebut dapat meliputi pola gizi seimbang yang terdiri dari pola makan, pola istirahat dan olahraga. Pola makan menjadi poin utama untuk menjaga kesehatan tubuh menuju pola hidup yang baik dan sehat.</p>
                          <p align="justify">
                          Pola gizi seimbang berpedoman pada pola makan yang mengandung nutrisi dan kandungan zat yang diperlukan oleh tubuh. Keseimbangan tersebut perlu dijaga untuk menuju kepada pola hidup sehat menjadi manusia yang memiliki daya tubuh yang kuat.</p>
                          <hr>
            			  <p>
                            <a href="<?= base_url('polahidup/gizi') ?>" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">Baca Selengkapnya !</a>
                          </p>
                        </div> -->
		</div>
	</div>

	<!-- <div class="bg-white py-4 mb-4">
                      <div class="row mx-4 my-4 mb-0 product-item-2 align-items-start">
                        <h2 class="section-title mb-1 ml-3" style="margin-left:750px">Asupan Kalori</h2>
                      </div>

                      <div class="row mx-4 my-4  product-item-2 align-items-start">
                        <div class="col-md-12 mb-5 mb-md-0">
                            <img src="<?= base_url('assets/images/polahidup/coba.jpg'); ?>" alt="Image" class="img-fluid img-thumbnail">
                        </div>

                      </div>
                    </div> -->


	<!-- <div class="bg-white py-4 mb-4">
                      <div class="row mx-4 my-4 mb-0 product-item-2 align-items-start">
                        <h2 class="section-title mb-1 ml-3">Waktu Makan</h2>
                      </div>

                      <div class="row mx-4 my-4  product-item-2 align-items-start">
                        <div class="col-md-12 mb-5 mb-md-0">
                            <img src="<?= base_url('assets/images/polahidup/coba.jpg'); ?>" alt="Image" class="img-fluid img-thumbnail">
                        </div>

                      </div>
                    </div> -->
</div>


</div>


</div> <!-- .site-wrap -->

<script src="<?= base_url('assets/client/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery-ui.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery.countdown.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/aos.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery.fancybox.min.js"></script>
<script src="<?= base_url('assets/client/'); ?>js/jquery.sticky.js"></script>


<script src="<?= base_url('assets/client/'); ?>js/main.js"></script>

</body>
</html>
