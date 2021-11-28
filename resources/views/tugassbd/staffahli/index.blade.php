<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data staffahli</h3>

	<a href="/staffahli/tambah"> + Tambah staffahli Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>StaffAhliID</th>
			<th>NamaDepan</th>
			<th>NamaBelakang</th>
			<th>AsalDepartemen</th>
            <th>KodeDivisi</th>
            <th>NRP</th>
			<th>Opsi</th>
		</tr>
		@foreach($staff as $p)
		<tr>
			<td>{{ $p->StaffAhliID }}</td>
			<td>{{ $p->NamaDepan }}</td>
			<td>{{ $p->NamaBelakang }}</td>
            <td>{{ $p->AsalDepartemen }}</td>
            <td>{{ $p->KodeDivisi }}</td>
            <td>{{ $p->NRP }}</td>
			<td>
				<a href="/staffahli/edit/{{ $p->StaffAhliID }}">Edit</a>
				|
				<a href="/staffahli/hapus/{{ $p->StaffAhliID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
