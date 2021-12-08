@extends('layout.bahagia')

@section('title', 'CRUD Edit Tugas Pegawai')
@section('judulhalaman', 'Edit Tugas Pegawai')

@section('konten')



	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
		ID Pegawai <input type="number" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> <br/>
		Tanggal <input type="datetime" required="required" name="Tanggal" value="{{ $p->Tanggal }}"> <br/>
		Nama Tugas <input type="text" required="required" name="NamaTugas" value="{{ $p->NamaTugas }}"> <br/>
		Status <input type="text" required="required" name="Status" value="{{ $p->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach



@endsection
