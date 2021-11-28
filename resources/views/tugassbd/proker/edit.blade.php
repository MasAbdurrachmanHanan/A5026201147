<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit proker</h3>

	<a href="/proker"> Kembali</a>

	<br/>
	<br/>

	@foreach($proker as $p)
	<form action="/proker/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->NamaProker }}"> <br/>
		NamaProker <input type="text" required="required" name="NamaProker" value="{{ $p->NamaProker }}"> <br/>
		KodeDivisi <input type="text" required="required" name="KodeDivisi" value="{{ $p->KodeDivisi }}"> <br/>
		TempatProker <input type="text" required="required" name="TempatProker " value="{{ $p->TempatProker  }}"> <br/>
        TipeAcara <input type="text" required="required" name="TipeAcara" value="{{ $p->TipeAcara }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
