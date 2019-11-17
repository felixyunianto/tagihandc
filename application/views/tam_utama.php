<!DOCTYPE html>
<html lang="en">

<head>
	<title>TagihanDC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/') ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/') ?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/') ?>css/footer.css">
	<link rel="stylesheet" href="<?php echo base_url('font-awesome/') ?>css/all.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome/') ?>css/font-awesome.min.css" />
	<script src="<?php echo base_url('bootstrap/') ?>js/jquer.scroll.js"></script>
	<script src="<?php echo base_url('bootstrap/') ?>js/cs.min.js"></script>
	<script src="<?php echo base_url('bootstrap/') ?>js/jquery.min.js"></script>
	<script src="<?php echo base_url('bootstrap/') ?>js/popper.min.js"></script>
	<script src="<?php echo base_url('bootstrap/') ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('bootstrap/') ?>js/script.js"></script>
	<script>
		$(document).ready(function () {
			// Add smooth scrolling to all links
			$("a").on('click', function (event) {

				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();

					// Store hash
					var hash = this.hash;

					// Using jQuery's animate() method to add smooth page scroll
					// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function () {

						// Add hash (#) to URL when done scrolling (default click behavior)
						window.location.hash = hash;
					});
				} // End if
			});
		});

	</script>
	<style>
		.carousel-inner img {
			width: 100%;
			height: 100%;
		}

		/*    [ Partners ]    */
		.partners {
			position: relative;
			padding-top: 45px;
		}

		.partners:before {
			position: absolute;
			content: '';
			left: -200px;
			top: 300px;
			width: 300px;
			height: 300px;
			background-image: url('<?php echo base_url('bootstrap/') ?>/dot.png');
			background-repeat: no-repeat;
			background-size: cover;
			-webkit-animation-name: scale;
			animation-name: scale;
			-webkit-animation-duration: 4s;
			animation-duration: 4s;
			-webkit-animation-iteration-count: infinite;
			animation-iteration-count: infinite;
			-webkit-animation-timing-function: linear;
			animation-timing-function: linear;
			z-index: 1;
		}

		.partners:after {
			position: absolute;
			content: '';
			left: -140px;
			top: 250px;
			width: 400px;
			height: 400px;
			background-image: url('<?php echo base_url('bootstrap/') ?>/shape.png');
			background-repeat: no-repeat;
			background-size: cover;
			-webkit-animation-name: rotate;
			animation-name: rotate;
			-webkit-animation-duration: 20s;
			animation-duration: 20s;
			-webkit-animation-iteration-count: infinite;
			animation-iteration-count: infinite;
			-webkit-animation-timing-function: linear;
			animation-timing-function: linear;
			z-index: 1;
		}

		.partners .image {
			border-radius: 10px;
			overflow: hidden;
			margin-bottom: 20px;
		}

		.partners .section-header {
			margin: auto;
		}

		.partners #accordion {
			margin-bottom: 20px;
		}

		.partners #accordion .item {
			position: relative;
			margin-bottom: 15px;
		}

		.partners #accordion .item .data {
			position: relative;
			padding-left: 45px;
		}

		.partners #accordion .item .data .icon {
			position: absolute;
			content: '';
			top: 0;
			left: 0;
			width: 30px;
			height: 30px;
			line-height: 30px;
			border-radius: 100px;
			font-size: 14px;
			text-align: center;
			background-image: -webkit-gradient(linear, left top, right top, from(#ff512f), to(#dd2476));
			background-image: -webkit-linear-gradient(left, #ff512f 0%, #dd2476 100%);
			background-image: -o-linear-gradient(left, #ff512f 0%, #dd2476 100%);
			background-image: linear-gradient(to right, #ff512f 0%, #dd2476 100%);
		}

		.partners #accordion .item .data .icon i {
			position: absolute;
			top: 50%;
			left: 50%;
			color: #fff;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
		}

		.partners #accordion .item .data[aria-expanded="true"] .icon .plus {
			opacity: 0;
		}

		.partners #accordion .item .data[aria-expanded="true"] .icon {
			background-image: -webkit-gradient(linear, left top, right top, from(#dd2476), to(#ff512f));
			background-image: -webkit-linear-gradient(left, #dd2476 0%, #ff512f 100%);
			background-image: -o-linear-gradient(left, #dd2476 0%, #ff512f 100%);
			background-image: linear-gradient(to right, #dd2476 0%, #ff512f 100%);
		}

		.partners #accordion .item .data>p {
			font-size: 17px;
			font-weight: 600;
			line-height: 30px;
			cursor: default;
		}

		.partners #accordion .item .content {
			padding: 10px 0 0 45px;
		}

		.partners #accordion .item .content p {
			color: #555;
			font-size: 15px;
			font-weight: 500;
			line-height: 26px;
		}

		/*    [ Plan ]    */
		.plan {
			position: relative;
			padding-top: 40px;
		}

		.plan:after {
			position: absolute;
			content: '';
			right: -200px;
			top: 350px;
			width: 400px;
			height: 400px;
			background-image: url('<?php echo base_url('bootstrap/') ?>/shape.png');
			background-repeat: no-repeat;
			background-size: cover;
			-webkit-animation-name: rotate;
			animation-name: rotate;
			-webkit-animation-duration: 20s;
			animation-duration: 20s;
			-webkit-animation-iteration-count: infinite;
			animation-iteration-count: infinite;
			-webkit-animation-timing-function: linear;
			animation-timing-function: linear;
		}

	</style>
</head>

<body>
	<!-- Start Preloader -->
	<div id="preloader">
		<div class="loader"></div>
	</div>
	<!-- End Preloader -->
	<!--   <div class="container">
  <center>
  <img src="<?php echo base_url('bootstrap/') ?>utama.jpg" class="rounded-top" alt="Logo" height="370" width="900"><br><br><br><h4 class="section-text" style="color: white;">
              SELAMAT DATANG DI TAGIHAN DC</h4></center>
              <center><a href="#promo" class="btn-one" class="scroll-down absolute-center">Scroll Down</a></center>
  </div> -->

	<!-- MENU PROMO -->
	<section id="promo">
		<br><br><br><br>
		<section class="plan pt-0">
			<div class="container"><br>
				<center>
					<p class="section-title">PROMO</p>
					<h4 class="section-text">
						Tagihan DC Pasti Banyak Promonya<br><span>BROO</span>
					</h4>
				</center>
				<br><br><br><br>
				<div class="row">
					<div class="col">
						<center>
							<div id="demo" class="carousel slide" data-ride="carousel">
								<ul class="carousel-indicators">
									<li data-target="#demo" data-slide-to="0" class="active"></li>
									<li data-target="#demo" data-slide-to="1"></li>
									<li data-target="#demo" data-slide-to="2"></li>
									<li data-target="#demo" data-slide-to="3"></li>
									<li data-target="#demo" data-slide-to="4"></li>
								</ul>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="<?php echo base_url('bootstrap/') ?>banner/awal.jpg" class="rounded" style="width:650px;">
									</div>
									<div class="carousel-item">
										<img src="<?php echo base_url('bootstrap/') ?>banner/tagihan.jpg" class="rounded"
											style="width:650px;">
									</div>
									<div class="carousel-item">
										<img src="<?php echo base_url('bootstrap/') ?>banner/disc.jpg" class="rounded" style="width:650px;">
									</div>
									<div class="carousel-item">
										<img src="<?php echo base_url('bootstrap/') ?>banner/pdam.jpg" class="rounded" style="width:650px;">
									</div>
									<div class="carousel-item">
										<img src="<?php echo base_url('bootstrap/') ?>banner/akhir.jpg" class="rounded"
											style="width:650px;">
									</div>

								</div>
								<a class="carousel-control-prev" href="#demo" data-slide="prev">
									<span class="carousel-control-prev-icon"></span>
								</a>
								<a class="carousel-control-next" href="#demo" data-slide="next">
									<span class="carousel-control-next-icon"></span>
								</a>
							</div>
						</center>
					</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="col">
						<center>
							<img src="<?php echo base_url('bootstrap/') ?>tdc.png" alt="Logo" style="width:330px;"></center>
					</div>
				</div>
				<br><br><br>
				<center>
					<p class="section-description">Gimana Banyak Promonya kan BROO?
			</div>
		</section>
	</section>


	<br><br><br><br><br><br><br><br><br><br><br>
	<!-- MENU BERGABUNG -->
	<section id="kenapa">
		<div class="container"><br><br><br><br><br>
			<center>
				<p class="section-title">WHY ARE WE</p>
				<h4 class="section-text">Kenapa Harus <span>TagihanDC?</span></h4>
			</center>
			<center>
				<p class="section-description">Kami merupakan salah satu server pembayaran Tagihan Termurah di Indonesia, kami
					telah menyediakan berbagai macam pembayaran Tagihan PLN Prabayar,Internet, Pembelian Voucher Game Online dll
				</p>
			</center><br><br><br>
			<center>
				<div class="row">
					<div class="col"><img src="<?php echo base_url('bootstrap/') ?>icon/clock.png" class="rounded"
							style="width:45px;"><br><br><b>Transaksi Otomatis 24 Jam</b><br>
						<p class="section-description">Tengah malam kamu masih bisa melakukan transaksi Paket Internet, Tagihan
							Internet, Token PLN, dan Voucher Game.</p>
					</div>
					<div class="col"><img src="<?php echo base_url('bootstrap/') ?>icon/browser.png" class="rounded"
							style="width:45px;"><br><br><b>Jalur Transaksi Online</b><br>
						<p class="section-description">Kami menyediakan beberapa jalur transaksi online, dijamin tanpa biaya sms,
							yaitu transaksi via Website</p>
					</div>
					<div class="col"><img src="<?php echo base_url('bootstrap/') ?>icon/boy.png" class="rounded"
							style="width:45px;"><br><br><b>Pendaftaran Gratis Dan Mudah</b><br>
						<p class="section-description">Tanpa biaya pendaftaran 100% Gratis, setelah mendaftar akun anda langsung
							aktif dan dapat melakukan deposit.</p>
					</div>
				</div><br><br>
				<div class="row">
					<div class="col"><img src="<?php echo base_url('bootstrap/') ?>icon/shopping-basket.png" class="rounded"
							style="width:45px;"><br><br><b>Harga Terbaik</b><br>
						<p class="section-description">Harga Terbaik dan Termurah yang tentunya bukan Murahan</p>
					</div>
					<div class="col"><img src="<?php echo base_url('bootstrap/') ?>icon/chat.png" class="rounded"
							style="width:45px;"><br><br><b>Bantuan CS Ramah</b><br>
						<p class="section-description">Customer Service kami akan melayani anda dengan baik</p>
					</div>
					<div class="col"><img src="<?php echo base_url('bootstrap/') ?>icon/refund.png" class="rounded"
							style="width:45px;"><br><br><b>Refund Transaksi</b><br>
						<p class="section-description">Pengembalian Saldo jika transaksi yang dilakukan mendapatkan status sukses
							tetapi produk belum masuk kepada pembeli.</p>
					</div>
				</div>
			</center>
		</div>
	</section>

	<!-- MENU TENTANG KAMI -->
	<br><br><br><br><br><br><br><br>
	<section id="tentang">
		<br><br><br><br>
		<section class="plan pt-0"><br><br>
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="section-title">TENTANG KITA KITA</p>
						<h4 class="section-text">
							TagihanDC Itu Apaan sih<br><span>BROO?</span>
						</h4><br>
						<p class="section-description"> Berdiri di tahun 2019, TagihanDC merupakan layanan pembayaran tagihan
							berbasis web yang berfokus terhadap kualitas layanan pembelian, pengalaman konsumen & Kualitas harga
							termurah.
						</p>
						<div class="row">
							<div class="col">
								<center><img src="<?php echo base_url('bootstrap/') ?>ap.png" class="mr-3 mt-3 rounded-circle"
										style="width:35px;"><br><br>
									<h12><b>Muhammad Irfan Bakhtiar</b></h12><br>Developer Website
								</center>
							</div>

							<div class="col">
								<center><img src="<?php echo base_url('bootstrap/') ?>ap.png" class="mr-3 mt-3 rounded-circle"
										style="width:35px;"><br><br>
									<h12><b>Yogi Irwan Rizky Saputra</b></h12><br>Developer Website
								</center>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<center><img src="<?php echo base_url('bootstrap/') ?>aw.png" class="mr-3 mt-3 rounded-circle"
										style="width:35px;"><br><br>
									<h10><b>Tiara Arista Hasanah</b></h10><br>Designer Website
								</center>
							</div>
							<div class="col">
								<center><img src="<?php echo base_url('bootstrap/') ?>aw.png" class="mr-3 mt-3 rounded-circle"
										style="width:35px;"><br><br>
									<h10><b>Tia Sulistiana Safitri</b></h10><br>Designer Website
								</center>
							</div>
						</div>
					</div>
					<div class="col"><br>
						<img src="<?php echo base_url('bootstrap/') ?>about-us.png" class="rounded" alt="Logo" style="width:500px;">
					</div>

				</div>
			</div>
		</section>
	</section>


	<!-- MENU FAQ -->
	<section id="faq">
		<br><br><br>
		<section class="partners">
			<div class="container">
				<div class="row">
					<div class="col">
						<img src="<?php echo base_url('bootstrap/') ?>partners.jpg" class="rounded" alt="Logo" style="width:650px;">

					</div>
					<div class="col">
						<p class="section-title">Hal-Hal</p>
						<h4 class="section-text">
							Yang Sering Ditanyakan<br><span>FAQ</span>
						</h4><br>

						<!-- Accordion -->
						<ul id="accordion">

							<!-- Accordion Item 1 -->
							<li class="item">
								<div class="data" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
									<div class="icon">
										<i class="plus fas fa-plus"></i>
										<i class="minus fas fa-minus"></i>
									</div>
									<!-- Accordion Item Header -->

									<p>
										<b>Q : Apakah Transaksi di TagihanDC bekerja 24Jam Non Stop ?</b></p>
								</div>

								<div class="content">
									<div id="collapseOne" class="collapse show" data-parent="#accordion">

										<!-- Accordion Item Description -->
										<p>Benar, sistem kami dapat bekerja selama 24 jam non stop dan pengguna dapat melakukan aktivitas
											transaksi selama 24 jam. </p>
									</div>
								</div>
							</li>

							<!-- Accordion Item 2 -->
							<li class="item">
								<div class="data" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
									<div class="icon">
										<i class="plus fas fa-plus"></i>
										<i class="minus fas fa-minus"></i>
									</div>
									<!-- Accordion Item Header -->
									<p><b>Q : Kemanakah jika saya memerlukan Bantuan ?</b></p>
								</div>

								<div class="content">
									<div id="collapseTwo" class="collapse" data-parent="#accordion">

										<!-- Accordion Item Description -->
										<p>Kami mempunyai Customer Service (CS) yang siap membantu anda melalui layanan live chat yang kami
											sediakan di halaman utama TagihanDC.</p>
									</div>
								</div>
							</li>

							<!-- Accordion Item 3 -->
							<li class="item">
								<div class="data" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
									<div class="icon">
										<i class="plus fas fa-plus"></i>
										<i class="minus fas fa-minus"></i>
									</div>
									<!-- Accordion Item Header -->
									<p><b>Q : Sistem Pembayaran apa yang digunakan di TagihanDC ?</b></p>
								</div>

								<div class="content">
									<div id="collapseThree" class="collapse" data-parent="#accordion">

										<!-- Accordion Item Description -->
										<p>TagihanDC mendukung pembayaran seperti melalui ATM, E-Money (Gopay,OVO) , Indomaret & Ovo.</p>
									</div>
								</div>
							</li>

							<!-- Accordion Item 4 -->
							<li class="item">
								<div class="data" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false">
									<div class="icon">
										<i class="plus fas fa-plus"></i>
										<i class="minus fas fa-minus"></i>
									</div>
									<!-- Accordion Item Header -->
									<p><b>Q : Jalur Transaksi apa yang digunakan ?</b></p>
								</div>

								<div class="content">
									<div id="collapseFour" class="collapse" data-parent="#accordion">
										<!-- Accordion Item Description -->
										<p>Saat ini kami menyediakan jalur transaksi online (melalui website).</p>
									</div>
								</div>
							</li>


							<!-- Accordion Item 6 -->
							<li class="item">
								<div class="data" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false">
									<div class="icon">
										<i class="plus fas fa-plus"></i>
										<i class="minus fas fa-minus"></i>
									</div>
									<!-- Accordion Item Header -->
									<p><b>Q : Apakah keuntungan bertransaksi di TagihanDC ?</b></p>
								</div>

								<div class="content">
									<div id="collapseSix" class="collapse" data-parent="#accordion">

										<!-- Accordion Item Description -->
										<p>Anda akan mendapatkan kemudahan dalam satu genggaman untuk membayar berbagai macam produk
											tagihan, dengan biaya yang terjangkau. </p>
									</div>
								</div>
							</li>

						</ul>


					</div>
				</div>
			</div>
		</section>
	</section>

	<!-- PEMBAYARAN -->
	<section id="pembayaran">
		<br><br><br><br><br>
		<section class="plan pt-0">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="section-title">Pembayaran</p>
						<h4 class="section-text">
							Apa Yang Digunakan<br><span>BROO?</span>
						</h4><br><br><br><br>
						<p class="section-description">Pembayaran yang kami support di TagihanDC adalah</p>
						<center>
							<div class="row">
								<div class="col"><img src="<?php echo base_url('bootstrap/') ?>bri.png" class="rounded" alt="Logo">
								</div>
								<div class="col"><img src="<?php echo base_url('bootstrap/') ?>mandiri.png" class="rounded" alt="Logo">
								</div>
								<div class="col"><img src="<?php echo base_url('bootstrap/') ?>bca.png" class="rounded" alt="Logo">
								</div>
								<div class="col"><img src="<?php echo base_url('bootstrap/') ?>bni.png" class="rounded" alt="Logo">
								</div>
							</div>
							<div class="row">
								<div class="col"><img src="<?php echo base_url('bootstrap/') ?>gopay.png" class="rounded" alt="Logo">
								</div>
								<div class="col"><img src="<?php echo base_url('bootstrap/') ?>ovo.png" class="rounded" alt="Logo"
										style="width:50px;"></div>
								<div class="col"><img src="<?php echo base_url('bootstrap/') ?>alfamart.png" class="rounded" alt="Logo">
								</div>
								<div class="col"><img src="<?php echo base_url('bootstrap/') ?>indomaret.png" class="rounded"
										alt="Logo"></div>
							</div>
						</center>
					</div>

					<div class="col"><br><br>
						<img src="<?php echo base_url('bootstrap/') ?>pay.png" class="rounded" alt="Logo" style="width:500px;">
					</div>
				</div>
		</section>
	</section>

	<!-- MENU HUBUNGI -->
	<br><br><br>
	<section id="hubungi">
		<br><br><br>
		<section class="partners">
			<div class="container">
				<div class="row">
					<div class="col-sm"><br><br><br><img src="<?php echo base_url('bootstrap/') ?>HubKami.png" class="rounded"
							alt="Logo" style="width:550px;"></a><br>
						<center><i>Jika ada pertanyaan, Pengaduan, Kritik dan Saran silahkan kirimkan pesan Anda di sini.</i>
						</center>
						<hr>
					</div>
					<div class="row">
						<div class="col-sm">&nbsp;&nbsp;&nbsp;&nbsp;
							<div class="solid"></div>
						</div>
					</div>
					<div class="col-sm">
						<form class="form-horizontal">
							<p class="section-title">Pertanyaan</p>
							<h4 class="section-text">Belum Tersampaikan Di<span> TagihanDC?</span></h4>
							<center>
								<div class="form-group">
									<div style="text-align:left;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<label class="control-label col-sm-5" for="nama">Nama Lengkap :</label></div>
									<div class="col-sm-9">
										<input type="text" placeholder="Masukkan Nama Lengkap*" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div style="text-align:left;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<label class="control-label col-sm-5" for="email">Email :</label></div>
									<div class="col-sm-9">
										<input type="text" placeholder="Masukkan Email*" class="form-control" id="email">
									</div>
								</div>
								<div class="form-group">
									<div style="text-align:left;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<label class="control-label col-sm-5" for="judul">Judul :</label></div>
									<div class="col-sm-9">
										<input type="text" placeholder="Masukkan Judul Pesan*" class="form-control" id="judul">
									</div>
								</div>
								<div class="form-group">
									<div style="text-align:left;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<label class="control-label col-sm-5" for="judul">Isi :</label></div>
									<div class="col-sm-9">
										<textarea class="form-control" placeholder="Masukkan Isi Pesan Anda*" rows="5"
											id="comment"></textarea>
									</div>
								</div>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button
									type="submit" class="btn btn-info text-uppercase font-weight-bold mb-2">KIRIM</button>
						</form>
						</center>
					</div>
				</div>
			</div>
		</section>
	</section>
</body>

</html>
