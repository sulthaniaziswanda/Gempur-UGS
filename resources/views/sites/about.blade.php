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
  <link rel="stylesheet" href="css/about.css">

  <title>About</title>
</head>
<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
         <a class="navbar-brand" href="{{ url('/') }}">About</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- Akhir Navbar -->

<!-- Jumbroton -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><span>Donasi Sekarang</span></h1><br>
    <div class="container">
       <img src="css/img/bpd.png">
       <hr>
       <div class="card">
        <div class="card-header text-center">
            GEMPUR UGS
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>Gempur UGS adalah Gerakan Masyarakat Sepuluh Ribu Rupiah Ujung Gading Sejahtera bermaksud membantu kaum duafa merupakan sebuah gerakan pemerintah Kecamatan Lembah Melintang bersama masyarakat Ujung Gading.</p>
            </blockquote>
        </div>
    </div>
    <hr>
    <h3 class="rekening">NO. REKENING: 1500.0210.30353-6<p>Bank Nagari Cabang Ujung Gading</h3>
    </div>
    <p class="textupload">Upload Bukti Pengiriman</p>
    <a href="{{ url('/uploads/create') }}" class="btn btn-primary tombol">Upload</a>
</div>
</div>
<!-- Akhir Jumbotron -->

<!-- Footer -->
<div class="fixed-bottom">
  <div class="row footer bg-light">
    <div class="col text-center">
      <p>2020 All Right Reserved by saw</p>
  </div>
</div>
</div>
<!-- Akhir Footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/5599e7ae34.js" crossorigin="anonymous"></script>
</body>
</html>