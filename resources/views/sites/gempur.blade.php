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
  <link rel="stylesheet" href="css/gempur.css">
  
  <title>GEMPUR UGS</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
       <a class="navbar-brand" href="{{ url('/') }}">GEMPUR UGS</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <form class="navbar-form navbar-right" method="GET" action="{{ url('/gempur') }}">
            <div class="input-group">
                <input name="cari" type="text" class="form-control" placeholder="Cari...">
                <span class="input-group-btn"><button type="submit" class="btn btn-primary">Cari</button></span>
            </div>
        </form>
    </ul>
</div>
</div>
</nav>
<!-- Akhir Navbar -->

<!-- Jumbroton -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Sumbangan Terkumpul: Rp{{ number_format($donation->sum('jumlah'),0, ",", ".") }},00<hr><a href="{{ url('/about') }}" class="btn btn-primary">Donasi Sekarang</a></h1>
    <h1 class="penyumbang">Daftar Penyumbang</h1>
    <div class="container">
      <table class="table table-light">
        <thead>
          <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col" class="text-center">Nama</th>
            <th scope="col" class="text-center">Jumlah Sumbangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $donations as $donation)
        <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td class="text-center">{{ $donation->nama }}</td>
            <td class="text-center">Rp{{ number_format($donation->jumlah,0, ",", ".") }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
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
</body>
</html>