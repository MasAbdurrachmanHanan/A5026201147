<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="text" required="required" name="IDPegawai"> <br/>
		Bulan <input type="text" required="required" name="Bulan"> <br/>
		Tahun <input type="number" required="required" name="Tahun"> <br/>
		Gaji <input type="number" required="required" name="Gaji"> <br/>
        Tunjangan <input type="number" required="required" name="Tunjangan"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
