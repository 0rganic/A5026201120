@extends('layout.bahagia')

@section('title', 'CRUD Data Tugas Pegawai')
@section('judulhalaman', 'Data Tugas Pegawai')

@section('konten')


	<a href="/tugas/tambah"> + Tambah Tugas Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table">
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



@endsection
