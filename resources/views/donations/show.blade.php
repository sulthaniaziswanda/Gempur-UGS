@extends('layout.main')


@section('title', 'Data Donatur')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
            <ul class="list-group">
                <li class="list-group-item active text-center"><b>DETAIL</b></li>
                <li class="list-group-item"><b>Nama:</b> {{ $donation->nama }}</li>
                <li class="list-group-item"><b>Jumlah Sumbangan:</b> Rp{{ number_format($donation->jumlah,0, ",", ".") }}</li>
                <li class="list-group-item"><b>Tanggal Menyumbang:</b> {{ $donation->tanggal }}</li>
                <li class="list-group-item">
                    <span><form action="{{ url('/donations') }}/{{ $donation->id }}" method="post" onclick="javascript: return confirm('Anda yakin ingin menghapus ?')">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button></form></span>
                        <span><a href="{{ $donation->id }}/edit" class="btn btn-primary btn-sm">Ubah</a></span>
                        <span><a href="{{ url('/donations') }}" class="btn btn-default btn-sm">Kembali</a></span>
                        <hr>
                </li>
            </ul>
                <!-- <div class="card">
                    <img src="{{asset('css/img/img_avatar.png')}}" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>{{ $donation->nama }}</b></h4> 
                        <p>{{ $donation->tanggal }}</p> 
                        <p>Rp{{ number_format($donation->jumlah,0, ",", ".") }}</p> 
                    </div>
                    <span><a href="{{ $donation->id }}/edit" class="btn btn-primary btn-sm"> Edit</a></span>
                    <span><form action="{{ url('/donations') }}/{{ $donation->id }}" method="post" onclick="javascript: return confirm('Anda yakin ingin menghapus ?')">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm"> Delete</button></form></span>
                        <span><a href="{{ url('/donations') }}" class="btn btn-default btn-sm"> Kembali</a></span>
                        <hr>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection