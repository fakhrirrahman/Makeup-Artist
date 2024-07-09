<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

	<!-- <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css"> -->
	<link rel="icon" href="{{asset('halaman/images/Farida.png')}}" type="image/x-icon">

	<link rel="stylesheet" href="halaman/css/animate.css">

	<link rel="stylesheet" href="halaman/css/owl.carousel.min.css">
	<link rel="stylesheet" href="halaman/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="halaman/css/magnific-popup.css">

	<link rel="stylesheet" href="halaman/css/aos.css">

	<link rel="stylesheet" href="halaman/css/ionicons.min.css">

	<link rel="stylesheet" href="halaman/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="halaman/css/jquery.timepicker.css">


	<link rel="stylesheet" href="halaman/css/flaticon.css">
	<link rel="stylesheet" href="halaman/css/icomoon.css">
	<link rel="stylesheet" href="halaman/css/style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="{{route('awal.index')}}"><img src="{{ asset('halaman/images/Firda.png') }}"
					alt="Firda MUA Logo" style="width: 70px; height: auto;"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="{{route('awal.about')}}" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="{{route('awal.about')}}" class="nav-link">About</a></li>
					<li class="nav-item"><a href="{{route('awal.harga')}}" class="nav-link">Layanan</a></li>
					<li class="nav-item"><a href="{{route('awal.reservasi')}}" class="nav-link">Reservasi</a></li>
					<li class="nav-item"><a href="{{route('awal.contact')}}" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->



	<section class="hero-wrap js-fullheight" style="background-image: url('{{ asset("halaman/images/bg_1.jpg") }}')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-10 ftco-animate text-center">
					<div class="icon">
						<span class=""><img src="{{ asset('halaman/images/Firda.png') }}" alt=""
								style="width: 100px; height: auto;"></span>

					</div>
					<h1>Firda mua makeup artist</h1>
					<div class="row justify-content-center">
						<div class="col-md-7 mb-3">
							<p>Selamat datang diwebsite kami, kami siap melayani sesuai permintaan anda</p>
						</div>
					</div>
					<p>
						<!-- <a href="#" class="btn btn-primary p-3 px-5 py-4 mr-md-2">Get in Touch</a> -->
						<a href="{{route('awal.contact')}}"
							class="btn btn-outline-primary p-3 px-5 py-4 ml-md-2">Hubungi kami</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-intro">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="{{ asset('halaman/images/Firda.png') }}" class="img-fluid rounded intro-image"
						alt="Intro Image">
				</div>
				<div class="col-md-6">
					<div class="heading-section ftco-animate">
						<h2 class="mb-4">Keuntungan &amp; pengalman</h2>
					</div>
					<p class="ftco-animate">Kami tidak akan mengecewakan pelanggan kami.</p>
					<ul class="mt-5 do-list">
						<li class="ftco-animate"><a href="#"><span
									class="ion-ios-checkmark-circle mr-3"></span>Pengalaman dalam meningkatkan rasa
								percaya diri klien dengan makeup</a></li>
						<li class="ftco-animate"><a href="#"><span
									class="ion-ios-checkmark-circle mr-3"></span>Menyamarkan ketidaksempurnaan kulit</a>
						</li>
						<li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Kreativitas dalam mengekspresikan kepribadian klien melalui makeup</a></li>
						<li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Kemampuan menyamarkan garis halus untuk tampilan yang lebih muda</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>



	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row no-gutters">
				@foreach($AdminReser as $AdminReser)
					<div class="col-md-4 d-flex align-items-stretch">
						<div class="offer-deal text-center px-2 px-lg-5">
							<div class="img" style="background-image: url('{{ asset('foto/' . $AdminReser->foto) }}');">
							</div>
							<div class="text mt-4">
								<h3 class="mb-4">{{ $AdminReser->judul }}</h3>
								<p class="mb-5">{{ $AdminReser->isi }}</p>
								<p>
									<a href="{{ route('awal.reservasi') }}" class="btn btn-white px-4 py-3">Reservasi sekarang
										<span class="ion-ios-arrow-round-forward"></span>
									</a>
								</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	

	<section class="ftco-section">
		<div class="container-fluid px-md-5">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-12 heading-section ftco-animate text-center">
					<h3 class="subheading">Harga</h3>
					<h2 class="mb-1">Harga bersahabat</h2>
				</div>
			</div>

			<section class="ftco-section">
				<div class="row align-items-center">
					<div class="col-lg-4">
						<div class="row no-gutters">
							<div class="col-md-6 d-flex align-items-stretch">
							</div>
							<div class="col-md-6 d-flex align-items-stretch">

							</div>
							<div class="col-md-6 d-flex align-items-stretch">

							</div>
							<div class="col-md-6 d-flex align-items-stretch">

							</div>
						</div>
					</div>


					<div class="col-lg-4 d-flex align-items-stretch">
						<div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4">
							<div>
								<h3>Harga</h3>
								<p>ada beberapa paket yang akan kami tawarkan untuk anda</p>
							</div>
							<div class="card">
								<div class="card-header" id="headingOne">
									<h2 class="mb-0">
										<button class="d-flex align-items-center justify-content-between btn btn-link"
											data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
											aria-controls="collapseOne">
											Make up
											<i class="fa" aria-hidden="true"></i>
										</button>
									</h2>
								</div>
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
									data-parent="#accordion">
									<div class="card-body text-left">
										<ul class="list-unstyled">
											<li class="d-flex justify-content-between">
												<span>make up wisuda+hair do</span>
												<p class="price" style="color: black">Rp. 450.000</p>
											</li>
											<li class="d-flex justify-content-between">
												<span>make up preweding + hair do + kostum</span>
												<p class="price" style="color: black">Rp 1.500.000</p>
											</li>
											<li class="d-flex justify-content-between">
												<span>make up wedding (pengantin wanita + pria) + hair do + baju +
													asesoris</span>
												<p class="price" style="color: black">Rp 5.500.000</p>
											</li>
											<li class="d-flex justify-content-between">
												<span>make wedding (2 pengantin + 2 bapak + 2 ibu) hair do + baju +
													asesoris</span>
												<p class="price" style="color: black">Rp 8.000.000</p>
											</li>
											<li class="d-flex justify-content-between">
												<span>make up + hair do engagement</span>
												<p class="price" style="margin-left: auto; color:black">Rp 1.000.000</p>
											</li>
										</ul>

									</div>
								</div>
							</div>


						</div>
					</div>


					<div class="col-lg-4">
						<div class="row no-gutters">
							<div class="col-md-6 d-flex align-items-stretch">

							</div>
							<div class="col-md-6 d-flex align-items-stretch">

							</div>
							<div class="col-md-6 d-flex align-items-stretch">

							</div>
							<div class="col-md-6 d-flex align-items-stretch">

							</div>
						</div>
					</div>
				</div>
			</section>
	</section>

	<section class="ftco-gallery ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<h3 class="subheading">Gallery</h3>
					<h2 class="mb-1">Beberapa foto kami</h2>
				</div>
			</div>
			<div class="row">
				@foreach($galeri as $gallery)
				<div class="col-md-3 ftco-animate">	
					<a href="{{ asset('foto_galeri/' . $gallery->foto) }}" class="gallery image-popup img d-flex align-items-center"
						style="background-image: url({{ asset('foto_galeri/' . $gallery->foto) }});">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
					<br>
				</div>
				@endforeach
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">FARIDA MUA</h2>
						<p>di mana keindahan diubah menjadi karya seni tak terlupakan. Kami menawarkan layanan make up
							profesional untuk setiap momen spesial dalam hidup Anda, mulai dari pernikahan yang penuh
							kebahagiaan hingga momen lulus dari pendidikan yang berharga.</p>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Metode pembayaran</h2>
						<ul class="list-unstyled">
							<li><a href="#">Kirim ke bank BCA</a></li>
							<li><a href="#">NoRek : 1540775164</a></li>
							<li><a href="#">Nama : Nur Farida Tri Handayani</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Jadwal</h2>
						<ul class="list-unstyled">
							<li><a href="#">Hari : Setiap hari. <br>
									Jam: 10.00 – 18.00 WIB.</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Ada pertanyaan lain ?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">Potrokasan RT 2/ RW 5,
										Kowangan, Temanggung, 56218</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+62
											882-1557-1069</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">nurfaridatrihandayani@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p class="mb-0">
						<!-- Link back to Colorlib can't be removed. Template is lselsicensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
	  
						</script> Design <i class="icon-heart" aria-hidden="true"></i> by <a href="#"
							target="_blank">FIRDA MUA</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>




	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>



	<script src="{{asset('halaman/js/jquery.min.js')}}"></script>
	<script src="{{asset('halaman/js/jquery-migrate-3.0.1.min.js')}}"></script>
	<script src="{{asset('halaman/js/popper.min.js')}}"></script>
	<script src="{{asset('halaman/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('halaman/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{asset('halaman/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('halaman/js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('halaman/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('halaman/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('halaman/js/aos.js')}}"></script>
	<script src="{{asset('halaman/js/jquery.animateNumber.min.js')}}"></script>
	<script src="{{asset('halaman/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('halaman/js/jquery.timepicker.min.js')}}"></script>
	<script src="{{asset('halaman/js/scrollax.min.js')}}"></script>
	<script
		src="halaman/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="{{asset('halaman/js/google-map.js')}}"></script>
	<script src="{{asset('halaman/js/main.js')}}"></script>

</body>

</html>