@extends('layout.bahagia')

@section('title', 'Mengedit Data Penggaris')
@section('judulhalaman', 'Edit Data Penggaris')

@section('konten')
<body>


 @foreach($penggaris as $b)
 <form action="/penggaris/update" method="post">
     {{ csrf_field() }}

     <div class="form-group">

     <input type="hidden" name="id" value="{{ $b->kodepenggaris }}"> <br/>

     <label for ="merkpenggaris">Merk Penggaris </label> <input type="text" required="required" name="merkpenggaris" value="{{ $b->merkpenggaris}}" class = "form-control" autocomplete="off"> <br/>

     <label for ="stockpenggaris">Stock Penggaris </label> <input type="number" name="stockpenggaris" value = "{{ $b->stockpenggaris}}" required="required" pattern= "[0-9]{11}" class = "form-control"> <br/>

     <label for = "tersedia">Tersedia <select id = "tersedia" class = "form-control" name = "tersedia" value = "{{ $b->tersedia}}">
         <option value = "Y">Y</option>
         <option value = "T">T</option>
     </select>
     <br><br>
     <input type="submit" value="Simpan Data" class = "btn btn-success">
     <a href="/penggaris" class = "btn btn-primary" > Kembali</a>
 </div>
 </form>
 @endforeach


</body>
@endsection
