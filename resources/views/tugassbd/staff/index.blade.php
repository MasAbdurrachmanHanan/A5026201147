<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data staff</h3>

	<a href="/staff/tambah"> + Tambah staff Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>StaffID</th>
			<th>NamaDepan</th>
			<th>NamaBelakang</th>
			<th>AsalDepartemen</th>
            <th>KodeDivisi</th>
            <th>NRP</th>
			<th>Opsi</th>
		</tr>
		@foreach($staff as $p)
		<tr>
			<td>{{ $p->StaffID }}</td>
			<td>{{ $p->NamaDepan }}</td>
			<td>{{ $p->NamaBelakang }}</td>
            <td>{{ $p->AsalDepartemen }}</td>
            <td>{{ $p->KodeDivisi }}</td>
            <td>{{ $p->NRP }}</td>
			<td>
				<a href="/staff/edit/{{ $p->StaffID }}">Edit</a>
				|
				<a href="/staff/hapus/{{ $p->StaffID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
