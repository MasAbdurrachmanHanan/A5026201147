@extends('layout.bahagia')

@section('title', ' Data Penggaris')
@section('judulhalaman', 'Tampilan Data Penggaris')

@section('konten')
 <style>
     table th {
         text-align: center;
     }
     </style>

 <a href="/penggaris/add" class = "btn btn-primary" >  Tambah Penggaris Baru</a>

 <br/>
 <br/>
 <p>Cari Data Penggaris</p>
 <div class="container">
     <div class="form-group col-sm-6">
     <form action="/penggaris/cari" method="GET">
         <input type="text" class = "form-control"name="cari" placeholder="Cari penggaris .." value="{{ old('cari') }}" autocomplete="off">
     </div>
         <input type="submit" class = "btn btn-primary" value="CARI">
     </form>
 </div>
 <table border="2" class = "table table-hover text-center">

     <tr>
         <th>Kode Penggaris</th>
         <th>Merk Penggaris</th>
         <th>Stock Penggaris</th>
         <th>Tersedia</th>
         <th>Opsi</th>
     </tr>

     @foreach($penggaris as $b)
     <tr>
         <td>{{ $b->kodepenggaris }}</td>
         <td>{{ $b->merkpenggaris }}</td>
         <td>{{ $b->stockpenggaris }}</td>
         <td>{{ $b->tersedia }}</td>
         <td>
             <a href="/penggaris/view/{{ $b->kodepenggaris }}">View Detail</a>
             | <a href="/penggaris/edit/{{ $b->kodepenggaris }}">Edit</a>
             | <a href="/penggaris/hapus/{{ $b->kodepenggaris }}">Hapus</a>
         </td>
     </tr>
     @endforeach
 </table>

 {{ $penggaris->links() }}

</body>
@endsection
