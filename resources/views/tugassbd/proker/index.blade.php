<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data proker</h3>

	<a href="/proker/tambah"> + Tambah proker Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>NamaProker</th>
			<th>KodeDivisi</th>
			<th>TempatProker</th>
			<th>TipeAcara</th>
			<th>Opsi</th>
		</tr>
		@foreach($proker as $p)
		<tr>
			<td>{{ $p->NamaProker }}</td>
			<td>{{ $p->KodeDivisi }}</td>
			<td>{{ $p->TempatProker }}</td>
            <td>{{ $p->TipeAcara }}</td>
			<td>
				<a href="/proker/edit/{{ $p->NamaProker }}">Edit</a>
				|
				<a href="/proker/hapus/{{ $p->NamaProker }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
