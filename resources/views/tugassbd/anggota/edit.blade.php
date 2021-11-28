<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit anggota</h3>

	<a href="/anggota"> Kembali</a>

	<br/>
	<br/>

	@foreach($anggota as $p)
	<form action="/anggota/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->NRP }}"> <br/>
		NamaDepan <input type="text" required="required" name="NamaDepan" value="{{ $p->NamaDepan }}"> <br/>
		NamaBelakang <input type="text" required="required" name="NamaBelakang" value="{{ $p->NamaBelakang }}"> <br/>
		NRP <input type="number" required="required" name="NRP " value="{{ $p->NRP  }}"> <br/>
		AsalDepartemen <input type="text" required="required" name="AsalDepartemen" value="{{ $p->AsalDepartemen }}"> <br/>
        NamaProker <input type="text" required="required" name="NamaProker" value="{{ $p->NamaProker }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
