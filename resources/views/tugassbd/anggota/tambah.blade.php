<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data anggota</h3>

	<a href="/anggota"> Kembali</a>

	<br/>
	<br/>

	<form action="/anggota/store" method="post">
		{{ csrf_field() }}
		NamaDepan <input type="text" required="required" name="NamaDepan"> <br/>
		NamaBelakang <input type="text" required="required" name="NamaBelakang"> <br/>
		NRP <input type="number" required="required" name="NRP"> <br/>
		AsalDepartemen <input type="text" required="required" name="AsalDepartemen"> <br/>
        NamaProker <input type="text" required="required" name="NamaProker"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
