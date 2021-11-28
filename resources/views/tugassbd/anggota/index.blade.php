<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data anggota</h3>

	<a href="/anggota/tambah"> + Tambah anggota Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>NamaDepan</th>
			<th>NamaBelakang</th>
			<th>NRP</th>
			<th>AsalDepartemen</th>
            <th>NamaProker</th>
			<th>Opsi</th>
		</tr>
		@foreach($anggota as $p)
		<tr>
			<td>{{ $p->NamaDepan }}</td>
			<td>{{ $p->NamaBelakang }}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->AsalDepartemen }}</td>
            <td>{{ $p->NamaProker }}</td>
			<td>
				<a href="/anggota/edit/{{ $p->NRP }}">Edit</a>
				|
				<a href="/anggota/hapus/{{ $p->NRP }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
