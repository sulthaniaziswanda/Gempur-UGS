@extends('layout.main')


@section('title', 'Form Tambah Data Dontur')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Data Dontur</h1>
                <form method="post" action="{{ url('/donations') }}">
                    @csrf
                    <div class="form-group">
                       <label for="nama">Nama</label>
                       <input type="text" class="form-control @error('nama') is-invalid @enderror"  id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                       @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                   </div>
                   <div class="form-group">
                       <label for="tanggal">Tanggal</label>
                       <input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal" name="tanggal" value="{{ old('tanggal') }}">
                   </div>
                   <div class="form-group">
                       <label for="jumlah">Jumlah</label>
                       <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" placeholder="Masukkan Jumlah" name="jumlah" value="{{ old('jumlah') }}">
                       @error('jumlah')<div class="invalid-feedback">{{ $message }}</div>@enderror
                   </div>
                   <button type="submit" class="btn btn-primary btn-sm"> Tambah Data</button>
               </form>
           </div>
       </div>
   </div>
</div>
</div>
@endsection