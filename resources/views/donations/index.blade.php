@extends('layout.main')


@section('title', 'Data Sumbangan')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="col-10">
                <h1 class="mt-3">Daftar Donatur</h1>
                <a href="{{ url('/donations/create') }}" class="btn btn-primary my-2 btn-sm">[+]Tambah</a>
                <a href="{{ url('/exportexcel') }}" class="btn btn-warning my-2 btn-sm">Excel</a>
                <a href="{{ url('/exportpdf') }}" class="btn btn-danger my-2 btn-sm">PDF</a>
                <hr>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <form class="navbar-form navbar-right" method="GET" action="{{ url('/donations') }}">
                    <div class="input-group">
                        <input name="cari" type="text" class="form-control" placeholder="Cari...">
                        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Cari</button></span>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Jumlah Sumbangan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach( $donations as $donation)
                        <tr>
                            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $donation->nama }}</td>
                            <td class="text-center">Rp{{ number_format($donation->jumlah,0, ",", ".") }}</td>
                            <td class="text-center"><a href="{{ url('/donations') }}/{{ $donation->id }}" class="label label-info">Detail</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>                      
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection