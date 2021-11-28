<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data proker</h3>

	<a href="/proker"> Kembali</a>

	<br/>
	<br/>

	<form action="/proker/store" method="post">
		{{ csrf_field() }}
		NamaProker <input type="text" required="required" name="NamaProker"> <br/>
		KodeDivisi <input type="text" required="required" name="KodeDivisi"> <br/>
		TempatProker <input type="text" required="required" name="TempatProker"> <br/>
		TipeAcara <input type="text" required="required" name="TipeAcara"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
