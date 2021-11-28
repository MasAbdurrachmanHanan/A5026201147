<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit staffahli</h3>

	<a href="/staffahli"> Kembali</a>

	<br/>
	<br/>

	@foreach($staffahli as $p)
	<form action="/staffahli/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->StaffAhliID }}"> <br/>
		StaffAhliID <input type="text" required="required" name="StaffAhliID" value="{{ $p->StaffAhliID }}"> <br/>
		NamaDepan <input type="text" required="required" name="NamaDepan" value="{{ $p->NamaDepan }}"> <br/>
		NamaBelakang <input type="text" required="required" name="NamaBelakang" value="{{ $p->NamaBelakang }}"> <br/>
        AsalDepartemen <input type="text" required="required" name="AsalDepartemen" value="{{ $p->AsalDepartemen }}"> <br/>
        KodeDivisi <input type="text" required="required" name="KodeDivisi" value="{{ $p->KodeDivisi }}"> <br/>
        NRP <input type="text" required="required" name="NRP" value="{{ $p->NRP }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
