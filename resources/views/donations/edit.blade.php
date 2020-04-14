@extends('layout.main')


@section('title', 'Form Ubah Data Donatur')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Ubah Data Dontur</h1>
                <form method="post" action="{{ url('/donations') }}/{{ $donation->id }}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                       <label for="nama">Nama</label>
                       <input type="text" class="form-control @error('nama') is-invalid @enderror"  id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $donation->nama }}">
                       @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                   </div>
                   <div class="form-group">
                       <label for="tanggal">Tanggal</label>
                       <input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal" name="tanggal" value="{{ $donation->tanggal  }}">
                   </div>
                   <div class="form-group">
                       <label for="jumlah">Jumlah</label>
                       <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" placeholder="Masukkan Tanggal" name="jumlah" value="{{ $donation->jumlah  }}">
                       @error('jumlah')<div class="invalid-feedback">{{ $message }}</div>@enderror
                   </div>
                   <button type="submit" class="btn btn-primary btn-sm"> Ubah Data</button>
               </form>
               <hr>
           </div>
       </div>
   </div>
</div>
</div>

@endsection