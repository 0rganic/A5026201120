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
        <table class="w3-table">
                <input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
            <tr>
                <td><label>ID Pegawai</label></td>
                <td><label>:</label></td>
                <td><input type="number" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> </td>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="meeting-time">Tanggal</label></td>
                    <td><label>:</label></td>
                    <td><input type="datetime-local" id="meeting-time"
                        name="Tanggal" value=""
                        min="2020-06-07T00:00" max="2024-06-14T00:00"></td>
            </tr>
            <tr>
                <td><label>Nama Tugas</label></td>
                <td><label>:</label></td>
                <td><input type="text" required="required" name="NamaTugas" value="{{ $p->NamaTugas }}"></td>
            </tr>
            <tr>
                <td><label>Status</label></td>
                <td><label>:</label></td>
                <td><input type="text" required="required" name="Status" value="{{ $p->Status }}"></td>
        </table>
        <input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
	@endforeach



@endsection
