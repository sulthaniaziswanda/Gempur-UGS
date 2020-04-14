@extends('layout.main')


@section('title', 'Lihat Gambar')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <h1>Bukti Pengiriman</h1>
                    <div class="card">
                        <img src="{{ asset('images/'.$upload->bukti_upload) }}" alt="bukti_upload" width="100%">
                        <div class="container">
                            <br>
                            <p><b>Keterangan:</b> {{ $upload->keterangan }}</p>  
                        </div>
                        <span><form action="{{ url('/uploads') }}/{{ $upload->id }}" method="post" onclick="javascript: return confirm('Anda yakin ingin menghapus ?')">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button></form></span>
                            <span><a href="{{ url('/uploads') }}" class="btn btn-default btn-sm">Kembali</a></span>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection