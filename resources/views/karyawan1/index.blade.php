@extends('layout.bahagia')

@section('title', ' Data Karyawan1')
@section('judulhalaman', 'Tampilan Data Karyawan1')

@section('konten')
 <style>
     table th {
         text-align: center;
     }
     </style>

 <a href="/karyawan1/tambah" class = "btn btn-primary" >  Tambah Data</a>

 <br/>
 <br/>

 <table border="2" class = "table table-hover text-center">

     <tr>
         <th>NIP</th>
         <th>Nama</th>
         <th>Pangkat</th>
         <th>gaji</th>
         <th>Opsi</th>
     </tr>

     @foreach($karyawan1 as $b)
     <tr>
         <td>{{ $b->NIP }}</td>
         <td>{{ $b->Nama }}</td>
         <td>{{ $b->Pangkat }}</td>
         <td>{{ number_format($b->Gaji, 0, ',', '.') }}</td>

         <td>
            <a href="/karyawan1/hapus/{{ $b->NIP }}">Hapus Data</a>
         </td>
     </tr>
     @endforeach
 </table>

 {{ $karyawan1->links() }}

</body>
@endsection
