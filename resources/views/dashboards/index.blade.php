@extends('layout.main')

@section('title', 'Dashboard')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="container">
              <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">GEMPUR UGS</h1>
                    <p class="lead"><b>JUMLAH PENDONASI:</b></p>
                    <p><b>{{ $donation->count('id') }} orang</b></p>
                    <p class="lead"><b>DONASI TERKUMPUL:</b></p>
                    <p><b>Rp{{ number_format($donation->sum('jumlah'),0, ",", ".") }},00</b></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection