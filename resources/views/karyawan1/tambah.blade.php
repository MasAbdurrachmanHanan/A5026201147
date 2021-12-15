@extends('layout.bahagia')

   @section('title', 'Menambah Data Karyawan1')
   @section('judulhalaman', 'Tambah Data Karyawan1')

   @section('konten')
<body>

	<br/>

	<form action="/karyawan1/store" method="post">

		{{ csrf_field() }}
        <div class="form-group">
		<label for = "NIP">NIP </label> <input type="text" name="NIP"required="required" class = "form-control" autocomplete="off"> <br/>
		<label for = "Nama">Nama </label> <input type="text" name="Nama" required="required" class = "form-control" autocomplete="off"> <br/>
        <label for = "Pangkat">Pangkat </label> <input type="text" name="Pangkat" required="required" class = "form-control" autocomplete="off"> <br/>
		<label for = "Gaji">Gaji </label> <input type="number" name="Gaji" required="required" pattern= "[0-9]{11}" class = "form-control"> <br/>
        <br><br>
		<input type="submit" class = "btn btn-success" value="Simpan Data">
        <a href="/karyawan1" class = "btn btn-primary"> Kembali</a>
    </div>
	</form>

</body>
@endsection
