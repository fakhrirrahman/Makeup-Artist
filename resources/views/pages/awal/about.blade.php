<!DOCTYPE html>
<html lang="en">

<head>
	<title>About</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

	<!-- <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css')}}"> -->
	<link rel="icon" href="{{asset('halaman/images/Farida.png" type="image/x-icon')}}">

	<link rel="stylesheet" href="{{asset('halaman/css/animate.css')}}">

	<link rel="stylesheet" href="{{asset('halaman/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('halaman/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('halaman/css/magnific-popup.css')}}">

	<link rel="stylesheet" href="{{asset('halaman/css/aos.css')}}">

	<link rel="stylesheet" href="{{asset('halaman/css/ionicons.min.css')}}">

	<link rel="stylesheet" href="{{asset('halaman/css/bootstrap-datepicker.css')}}">
	<link rel="stylesheet" href="{{asset('halaman/css/jquery.timepicker.css')}}">


	<link rel="stylesheet" href="{{asset('halaman/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('halaman/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('halaman/css/style.css')}}">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="{{route('awal.index')}}"><img src="{{asset('halaman/images/Firda.png')}}"
					alt="Firda MUA Logo" style="width: 70px; height: auto;"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="{{route('awal.index')}}" class="nav-link">Home</a></li>
					<li class="nav-item active"><a href="{{route('awal.about')}}" class="nav-link">About</a></li>
					<li class="nav-item"><a href="{{route('awal.harga')}}" class="nav-link">Layanan</a></li>
					<li class="nav-item"><a href="{{route('awal.reservasi')}}" class="nav-link">Reservasi</a></li>
					<li class="nav-item"><a href="{{route('awal.contact')}}" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('halaman/images/bg_2.jpg')}}');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-3 bread">Welcome</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="{{route('awal.index')}}">Home</a></span>
						<span>About</span></p>
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
						<h2 class="mb-4">Tentang kami</h2>
					</div>
					<p class="ftco-animate">FARIDA MUA adalah tempat di mana kecantikan dan keragaman dipeluk dengan
						penuh sukacita. Kami bangga melayani pelanggan dari berbagai latar belakang, kepribadian, dan
						jenis kulit, menyadari bahwa setiap individu memiliki keunikan dan kebutuhan yang berbeda. Dari
						kulit yang berkilau hingga yang kering, dari penampilan yang sederhana hingga yang berani, kami
						berkomitmen untuk menghormati dan merayakan keindahan alami setiap pelanggan. Dengan pendekatan
						yang inklusif dan penuh empati, kami membawa kecantikan dalam segala bentuk dan warna menjadi
						sorotan, memastikan bahwa setiap pelanggan merasa diperlakukan secara khusus dan dihargai.</p>

				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-4 d-flex align-items-stretch">
					<div class="offer-deal text-center px-2 px-lg-5">
						<div class="img" style="background-image: url('{{ asset('halaman/images/wisuda.jpg') }}');">
						</div>
						<div class="text mt-4">
							<h3 class="mb-4">Make up wisuda</h3>
							<p class="mb-5">kami melayani makeup wisuda untuk anda.</p>
							<p><a href="{{route('awal.reservasi')}}" class="btn btn-white px-4 py-3"> Reservasi sekarang
									<span class="ion-ios-arrow-round-forward"></span></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-items-stretch">
					<div class="offer-deal active text-center px-2 px-lg-5">
						<div class="img"
							style="background-image: url('{{ asset('halaman/images/offer-deal-2.jpg') }}');"></div>
						<div class="text mt-4">
							<h3 class="mb-4">Make up preweding</h3>
							<p class="mb-5">kami siap melayani make up untuk anda yang mau preweding.</p>
							<p><a href="{{route('awal.reservasi')}}" class="btn btn-white px-4 py-3"> Reservasi sekarang
									<span class="ion-ios-arrow-round-forward"></span></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-items-stretch">
					<div class="offer-deal text-center px-2 px-lg-5">
						<div class="img"
							style="background-image: url('{{ asset('halaman/images/offer-deal-3.jpg') }}');"></div>
						<div class="text mt-4">
							<h3 class="mb-4"> make up weding </h3>
							<p class="mb-5">Kami melayani make up weding untuk anda.</p>
							<p><a href="{{route('awal.reservasi')}}" class="btn btn-white px-4 py-3"> Reservasi sekarang
									<span class="ion-ios-arrow-round-forward"></span></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-items-stretch">
					<div class="offer-deal text-center px-2 px-lg-5">
						<div class="img" style="background-image: url('{{ asset('halaman/images/gambar3.jpg') }}');">
						</div>
						<div class="text mt-4">
							<h3 class="mb-4"> make up weding (pengantin wanita + pria) </h3>
							<p class="mb-5">Kami melayani make up weding untuk anda.</p>
							<p><a href="{{route('awal.reservasi')}}" class="btn btn-white px-4 py-3 "> Reservasi
									sekarang <span class="ion-ios-arrow-round-forward"></span></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-items-stretch">
					<div class="offer-deal active text-center px-2 px-lg-5">
						<div class="img" style="background-image: url('{{ asset('halaman/images/gambar4.jpg') }}');">
						</div>
						<div class="text mt-4">
							<h3 class="mb-4">make up + hair do engagement</h3>
							<p class="mb-5">kami siap melayani make up untuk anda yang mau preweding.</p>
							<p><a href="{{route('awal.reservasi')}}" class="btn btn-white px-4 py-3"> Reservasi sekarang
									<span class="ion-ios-arrow-round-forward"></span></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container-fluid px-md-5">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-12 heading-section ftco-animate text-center">
					<h3 class="subheading">pembayaran</h3>
					<h2 class="mb-1">Metode pembayaran</h2>
				</div>
			</div>
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
							<h3>Pembayaran</h3>
							{{-- <p>Metode pembayaran </p> --}}
						</div>
						<div class="card">
							<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<button class="d-flex align-items-center justify-content-between btn btn-link"
										data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
										aria-controls="collapseOne">
										Cara bayar
										<i class="fa" aria-hidden="true"></i>
									</button>
								</h2>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
								data-parent="#accordion">
								<div class="card-body text-left">
									<ul>

										<span style="color: black">1. Pilih Layanan: Pilih jenis layanan yang Anda
											inginkan dari daftar yang tersedia.</span>
									</ul>
									<ul>

										<span style="color: black">2. Isi Formulir: Lengkapi formulir dengan informasi
											yang diperlukan, termasuk nama, email, nomor Whatsapp</span>
									</ul>
									<ul>

										<span style="color: black">3. alamat, tanggal reservasi, jumlah pembayaran, dan
											unggah bukti pembayaran.</span>
									</ul>
									<ul>

										<span style="color: black">4. Kirim Reservasi: Klik tombol "Send Message" untuk
											mengirimkan formulir reservasi Anda.</span>
									</ul>
									<ul>

										<span style="color: black">5. Tunggu Konfirmasi: Tunggu konfirmasi dari kami
											melalui email atau Whatsapp terkait reservasi Anda.</span>
									</ul>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingTwo">
								<h2 class="mb-0">

								</h2>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
								data-parent="#accordion">
								<div class="card-body text-left">

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
							<li><a href="#">Hari :Setiap hari. <br>
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
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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