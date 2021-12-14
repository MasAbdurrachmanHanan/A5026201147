@extends('layout.bahagia')

@section('title', 'Detail Data Penggaris')
@section('judulhalaman', 'Detail Data Penggaris')

@section('konten')

    <body>


        @foreach ($penggaris as $b)
            <br>
            <div>
                <label for="merkpenggaris">Merk Penggaris</label>
                <p>{{ $b->merkpenggaris }}
                <p>
            </div>

            <div>
                <label for="stockpenggaris">Stock Penggaris </label>
                <p>{{ $b->stockpenggaris }}
                <p>
            </div>

            <div>
                <label for="tersedia">Tersedia </label>
                <p>{{ $b->tersedia }}
                <p>
            </div>

                <a href="/penggaris" class="btn btn-primary"> Kembali</a>
                <br><br>
                </div>


        @endforeach


    </body>
@endsection
