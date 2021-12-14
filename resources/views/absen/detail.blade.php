@extends('layout.bahagia')

@section('title', 'CRUD Detail Absen')
@section('judulhalaman', 'Detail Data Absen')

@section('konten')



	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $a)
    {{ csrf_field() }}

    <table class="w3-table">
        <tr>
            <td><label>Nama Pegawai</label></td>
            <td><label>:</label></td>
            <td>{{ $a->pegawai_nama }}</td>
        </tr>
        <tr>
            <td><label>Tanggal</label></td>
            <td><label>:</label></td>
		    <td>{{ $a->Tanggal }}</td>
        </tr>
        <tr>
            <td><label>Status</label></td>
            <td><label>:</label></td>
            <td>{{ $a->Status }}</td>
        </tr>
    </table>
	@endforeach
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>

@endsection
