<!DOCTYPE html>
<html lang="en">

<head>
  <title>Reservasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
  <link rel="icon" href="{{ asset('halaman/images/Farida.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('halaman/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('halaman/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('halaman/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('halaman/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('halaman/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('halaman/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('halaman/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('halaman/css/jquery.timepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('halaman/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('halaman/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('halaman/css/style.css') }}">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar -dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('awal.index') }}"><img src="{{ asset('halaman/images/Firda.png') }}"
          alt="Firda MUA Logo" style="width: 70px; height: auto;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{ route('awal.index') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ route('awal.about') }}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{ route('awal.harga') }}" class="nav-link">Layanan</a></li>
          <li class="nav-item active"><a href="{{ route('awal.reservasi') }}" class="nav-link">Reservasi</a></li>
          <li class="nav-item"><a href="{{ route('awal.contact') }}" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('halaman/images/bg_2.jpg') }}');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-3 bread">Reservasi Sekarang</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('awal.index') }}">Home</a></span>
            <span>Reservasi</span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-1"></div>
        <div class="col-md-6 ftco-animate">
          @if (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif

          <form id="reservasiForm" action="{{ route('reservasi.store') }}" method="POST">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama" style="color: black">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama" required>
              </div>
              <div class="form-group col-md-6">
                <label for="email" style="color: black">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Input Email" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nomor" style="color: black">Nomor</label>
                <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Input Nomor" required>
              </div>
              <div class="form-group col-md-6">
                <label for="alamat" style="color: black">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Input Alamat" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="layanan" style="color: black">Pilih Layanan</label>
                <select class="form-control" id="layanan" name="layanan">
                  <option value="layanan1">Make up wisuda + hair do</option>
                  <option value="layanan2">Make up prewedding + hair do + kostum</option>
                  <option value="layanan3">Make up wedding (pengantin wanita + pria) + hair do + baju + asesoris
                  </option>
                  <option value="layanan4">Make up wedding (2 pengantin + 2 bapak + 2 ibu) + hair do + baju + asesoris
                  </option>
                  <option value="layanan5">Make up + hair do engagement</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="tanggal_reservasi" style="color: black">Tanggal Reservasi</label>
                <input type="date" class="form-control" id="tanggal_reservasi" name="tanggal" required>
              </div>
            </div>

            <div class="form-group text-center">
              <button type="button" id="submitBtn" class="btn btn-primary py-3 px-5">Kirim Pesan</button>
            </div>
          </form>

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
            <p>Di mana keindahan diubah menjadi karya seni tak terlupakan. Kami menawarkan layanan make up profesional
              untuk setiap momen spesial dalam hidup Anda, mulai dari pernikahan yang penuh kebahagiaan hingga momen
              lulus dari pendidikan yang berharga.</p>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget
            <div class=" ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Metode Pembayaran</h2>
            <ul class="list-unstyled">
              <li><a href="#">Kirim ke Bank BCA</a></li>
              <li><a href="#">NoRek: 1540775164</a></li>
              <li><a href="#">Nama: Nur Farida Tri Handayani</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Jadwal</h2>
            <ul class="list-unstyled">
              <li><a href="#">Hari: Setiap hari<br>Jam: 10.00 – 18.00 WIB</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Ada Pertanyaan Lain?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Potrokasan RT 2/ RW 5, Kowangan,
                    Temanggung, 56218</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 882-1557-1069</span></a>
                </li>
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
            </script> Design <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">FIRDA MUAphp</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const tanggalReservasiInput = document.getElementById('tanggal_reservasi');
      const today = new Date().toISOString().split('T')[0];
      tanggalReservasiInput.min = today;

      fetch('/reservasi/get-existing-dates')
        .then(response => response.json())
        .then(data => {
          let existingDates = data;
          tanggalReservasiInput.addEventListener('change', function() {
            if (existingDates.includes(this.value)) {
              alert('Reservasi sudah penuh, silahkan ganti tanggal.');
              this.value = '';
            }
          });
        });

      document.getElementById('submitBtn').addEventListener('click', function() {
        const tanggal = tanggalReservasiInput.value;
        if (tanggal) {
          const konfirmasi = confirm(`Apakah tanggal reservasi Anda sudah benar: ${tanggal}?`);
          if (konfirmasi) {
            document.getElementById('reservasiForm').submit();
          }
        } else {
          alert('Silakan pilih tanggal reservasi.');
        }
      });
    });
  </script>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>
  <script src="{{ asset('halaman/js/jquery.min.js') }}"></script>
  <script src="{{ asset('halaman/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('halaman/js/popper.min.js') }}"></script>
  <script src="{{ asset('halaman/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('halaman/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('halaman/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('halaman/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('halaman/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('halaman/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('halaman/js/aos.js') }}"></script>
  <script src="{{ asset('halaman/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('halaman/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('halaman/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('halaman/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('halaman/js/google-map.js') }}"></script>
  <script src="{{ asset('halaman/js/main.js') }}"></script>
</body>

</html>