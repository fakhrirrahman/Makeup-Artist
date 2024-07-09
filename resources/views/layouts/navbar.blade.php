<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar-custom {
      background: linear-gradient(135deg, #6e8efb, #a777e3);
      padding: 15px 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .navbar-custom .navbar-brand {
      color: white;
      font-weight: bold;
      font-size: 1.5rem;
    }
    .navbar-custom .nav-link {
      color: white;
      margin-right: 15px;
      transition: color 0.3s;
    }
    .navbar-custom .nav-link:hover {
      color: #ffd700;
    }
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 16 16'%3e%3cpath stroke='rgba%28255, 255, 255, 0.7%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M2 4h12M2 8h12M2 12h12'/%3e%3c/svg%3e");
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <a class="navbar-brand" href="#">FARIDA MUA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin') }}"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('reservasi.index')}}"><i class="fas fa-calendar-alt"></i> Reservasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('bukti.index')}}"><i class="fas fa-receipt"></i> Bukti Pembayaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('galeri.index')}}"><i class="fas fa-images"></i> Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('AdminReser.index')}}"><i class="fas fa-calendar-alt"></i> Edit Data Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
