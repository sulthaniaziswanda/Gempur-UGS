<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

  <!-- ICONS -->
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('css/img/bpd.png')}}">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>Home</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
       <a class="navbar-brand" href="{{ url('/') }}">Selamat Datang</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ url('/gempur') }}">Gempur UGS</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ url('/login') }}">Login</a>
          </li>
      </ul>
  </div>
</div>
</nav>
<!-- Akhir Navbar -->

<!-- Jumbroton -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><span>KECAMATAN LEMBAH MELINTANG</span></h1>
</div>
</div>
<!-- Akhir Jumbotron -->

<!-- Container -->
<div class="container">
  <!-- Info Panel -->
  <div class="row justify-content-center">
    <div class="col-10 info-panel">
      <div class="row">
        <div class="col-lg">
          <img src="css/img/employee.png" alt="employee" class="float-left">
          <h4>24 Hours</h4>
          <p></p>
      </div>
      <div class="col-lg">
          <img src="css/img/donasi.png" alt="employee" class="float-left">
          <h4>TEAM WORK</h4>
          <p></p>
      </div>
      <div class="col-lg">
          <img src="css/img/tabungan.png" alt="employee" class="float-left">
          <h4>SAVINGS</h4>
          <p></p>
      </div>
  </div>
</div>
</div>
<!-- Akhir Info Panel -->

<!-- Workingspace -->
<div class="row workingspace">
    <div class="col-lg-6">
      <img src="css/img/workingspace.png" alt="workingspace" class="img-fluid">

  </div>
  <div class="col-lg-5">
      <h3>GEMPUR <span>UGS</span></h3>
      <p>Donasi Kita Menolong Banyak Orang</p>

      <a href="{{ url('/about') }}" class="btn btn-primary tombol">Donasi Sekarang</a>
  </div>
</div>
<!-- Akhir Workingspace -->

<!-- Testimonial -->
<section class="testimonial">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h5>" Seorang idealis adalah orang yang menolong orang lain agar menjadi lebih makmur. "</h5>
    </div>
</div>

<div class="row justify-content-center">
  <div class="col-lg-6 justify-content-center d-flex">
    <figure class="figure">
      <img src="css/img/Henry_Ford.jpg" class="figure-img img-fluid rounded-circle" alt="Testi 1">
      <figcaption class="figure-caption">
        <h5>Henry Ford</h5>
        <p>Produsen Mobil</p>
    </figcaption>
</figure>
</div>
</div>
</section>
<!-- Akhir Testimonial -->

<!-- Footer -->
<div class="row footer">
    <div class="col text-center">
      <p>2020 All Right Reserved by saw</p>
  </div>
</div>
<!-- Akhir Footer -->
</div>
<!-- Akhir Container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>