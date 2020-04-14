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
  <link rel="stylesheet" href="{{asset('css/upload.css')}}">

  <title>About</title>
</head>
<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
         <a class="navbar-brand" href="{{ url('/') }}">Upload Bukti</a>
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
    <h1 class="display-4">Terima Kasih Atas Partisipasi Anda</h1>
    <br>
    <div class="card">
        <div class="card-header text-center bg-secondary text-white">
            <b>Upload Bukti Pengiriman Disini</b>
        </div>
        <div class="card-body">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br/>
                @endforeach
            </div>
            @endif
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form method="post" action="{{ url('/uploads') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <b>File Gambar</b><br/>
                    <input type="file" name="bukti_upload">
                </div>
                <div class="form-group">
                    <b>Keterangan</b>
                    <textarea class="form-control" name="keterangan"></textarea>
                </div>
                <input type="submit" name="send" value="Upload" class="btn btn-primary">
            </form>
        </div>
    </div>
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