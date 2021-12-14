@extends('layout.bahagia')

   @section('title', 'Menambah Data Penggaris')
   @section('judulhalaman', 'Tambah Data Penggaris')

   @section('konten')
<body>

	<br/>

	<form action="/penggaris/store" method="post">

		{{ csrf_field() }}
        <div class="form-group">
		<label for = "merkpenggaris">Merk Penggaris </label> <input type="text" name="merkpenggaris"required="required" class = "form-control" autocomplete="off"> <br/>

		<label for = "stockpenggaris">Stock Penggaris </label> <input type="number" name="stockpenggaris" required="required" pattern= "[0-9]{11}" class = "form-control"> <br/>

		<label for = "tersedia">Tersedia <select id = "tersedia" class = "form-control" name = "tersedia">
            <option value = "Y">Y</option>
            <option value = "T">T</option>
        </select>
        <br><br>
		<input type="submit" class = "btn btn-success" value="Simpan Data">
        <a href="/penggaris" class = "btn btn-primary"> Kembali</a>
    </div>
	</form>

</body>
@endsection
