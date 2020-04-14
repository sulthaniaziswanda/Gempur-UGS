@extends('layout.main')


@section('title', 'Donasi Masuk')

@section('content')
<!-- MAIN -->
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="col-10">
                <h1>Donasi Masuk</h1>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach( $uploads as $upload)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $upload->keterangan }}</td>
                            <td class="text-center"><a href="{{ url('/uploads') }}/{{ $upload->id }}" class="label label-info label-sm">Detail</a></td>
                            @endforeach
                        </tbody>
                    </table>                      
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END MAIN -->
@endsection       

