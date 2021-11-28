<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data staffahli</h3>

	<a href="/staffahli"> Kembali</a>

	<br/>
	<br/>

	<form action="/staffahli/store" method="post">
		{{ csrf_field() }}
        StaffAhliID <input type="text" required="required" name="StaffAhliID"> <br/>
		NamaDepan <input type="text" required="required" name="NamaDepan"> <br/>
		NamaBelakang <input type="text" required="required" name="NamaBelakang"> <br/>
        AsalDepartemen <input type="text" required="required" name="AsalDepartemen"> <br/>
		KodeDivisi <input type="number" required="required" name="KodeDivisi"> <br/>
        NRP <input type="number" required="required" name="NRP"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
