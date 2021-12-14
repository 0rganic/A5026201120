@extends('layout.bahagia')

@section('title', 'CRUD Tambah Tugas Pegawai')
@section('judulhalaman', 'Tambah Tugas Pegawai')

@section('konten')


	<a href="/tugas"> Kembali</a>



	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
        <table class="w3-table">
            <tr>
                <td><label>ID Pegawai</label></td>
                <td><label>:</label></td>
                <td><select name="idpegawai" >
                    @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                    @endforeach
                </select></td>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="meeting-time">Tanggal</label></td>
                    <td><label>:</label></td>
                    <td><input type="datetime-local" id="meeting-time"
                        name="meeting-time" value=""
                        min="2020-06-07T00:00" max="2024-06-14T00:00"></td>
            </tr>
            <tr>
                <td><label>Nama Tugas</label></td>
                <td><label>:</label></td>
                <td><input type="text" name="NamaTugas" required="required"></td>
            </tr>
            <tr>
                <td><label>Status</label></td>
                <td><label>:</label></td>
                <td><input type="text" name="Status" required="required"></td>
            </tr>
        </table>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>

@endsection
