<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Tugas Pegawai</h3>

	<a href="/tugas/tambah"> + Tambah Tugas Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->IDPegawai}}</td>
			<td>{{ $p->Tanggal}}</td>
			<td>{{ $p->NamaTugas }}</td>
            <td>{{ $p->Status}}</td>
			<td>
				<a href="/tugas/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
