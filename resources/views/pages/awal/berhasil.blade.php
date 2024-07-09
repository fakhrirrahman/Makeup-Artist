<!DOCTYPE html>
<html lang="en">

<head>
  <title>Reservasi</title>
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
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('halaman/images/bg_2.jpg')}}');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-3 bread">Konformasi sekarang</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('awal.index')}}">Home</a></span>
            <span>Reservasi</span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9 justify-content-center">
        <div class="col-md-8 ftco-animate">
          @if ($pesanan->isNotEmpty())
          <form>
            <div class="form-group row">
              <label for="staticId" class="col-sm-3 col-form-label font-weight-bold">Id:</label>
              <div class="col-sm-9">
                <p class="form-control-plaintext">{{ $pesanan->last()->id }}</p>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticNama" class="col-sm-3 col-form-label font-weight-bold">Nama:</label>
              <div class="col-sm-9">
                <p class="form-control-plaintext">{{ $pesanan->last()->nama }}</p>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticNomor" class="col-sm-3 col-form-label font-weight-bold">No HP:</label>
              <div class="col-sm-9">
                <p class="form-control-plaintext">{{ $pesanan->last()->nomor }}</p>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticTanggal" class="col-sm-3 col-form-label font-weight-bold">Tanggal:</label>
              <div class="col-sm-9">
                <p class="form-control-plaintext">{{ $pesanan->last()->tanggal }}</p>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticLayanan" class="col-sm-3 col-form-label font-weight-bold">Layanan:</label>
              <div class="col-sm-9">
                <p class="form-control-plaintext">
                  @php
                  $layanan = $pesanan->last()->layanan;
                  @endphp
                  @if($layanan == 'layanan1')
                  Make Up Wisuda + Hair Do
                  @elseif($layanan == 'layanan2')
                  Make Up Prewedding + Hair Do + Kostum
                  @elseif($layanan == 'layanan3')
                  Make Up Wedding (Pengantin Wanita + Pria) + Hair Do + Baju + Asesoris
                  @elseif($layanan == 'layanan4')
                  Make Up Wedding (2 Pengantin + 2 Bapak + 2 Ibu) + Hair Do + Baju + Asesoris
                  @elseif($layanan == 'layanan5')
                  Make Up + Hair Do Engagement
                  @endif
                </p>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticAlamat" class="col-sm-3 col-form-label font-weight-bold">Alamat:</label>
              <div class="col-sm-9">
                <p class="form-control-plaintext">{{ $pesanan->last()->alamat }}</p>
              </div>
            </div>
            <div class="form-group row justify-content-center mt-4">
              <div class="col-sm-6 text-center">
                @if ($pesanan->isNotEmpty())
                <a href="whatsapp://send?text=Halo%20saya%20ingin%20mengkonfirmasi%20pesanan%20%0ANomor%20Pesanan%3A%20{{ $pesanan->last()->id }}%0ANama%3A%20{{ $pesanan->last()->nama }}%0ANomor%20Telepon%3A%20{{ $pesanan->last()->nomor }}%0AAlamat%3A%20{{ $pesanan->last()->alamat }}%0ALayanan%3A%20{{ $pesanan->last()->layanan }}%0A&phone=+6288215571069"
                  class="btn btn-primary py-3 px-5" target="_blank">
                  Konfirmasi Pesanan<i class="fab fa-whatsapp fa-2x ms-3"></i>
                </a>
                @endif
              </div>
            </div>
          </form>
          @endif
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
            <p>di mana keindahan diubah menjadi karya seni tak terlupakan. Kami menawarkan layanan make up profesional
              untuk setiap momen spesial dalam hidup Anda, mulai dari pernikahan yang penuh kebahagiaan hingga momen
              lulus dari pendidikan yang berharga.</p>
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

            </script> Design <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">FIRDA MUA</a>
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