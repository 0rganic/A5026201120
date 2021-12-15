@extends('layout.bahagia')

@section('title', 'CRUD Edit Karyawan')
@section('judulhalaman', 'Edit Karyawan')

@section('konten')



	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $k)
    {{ csrf_field() }}

    <table class="w3-table">
        <tr>
            <td><label>NIP</label></td>
            <td><label>:</label></td>
            <td>{{ $k->NIP }}</td>
        </tr>
        <tr>
            <td><label>Nama Karyawan</label></td>
            <td><label>:</label></td>
		    <td>{{ $k->Nama }}</td>
        </tr>
        <tr>
            <td><label>Pangkat</label></td>
            <td><label>:</label></td>
            <td>{{ $k->Pangkat }}</td>
        </tr>
        <tr>
            <td><label>Gaji</label></td>
            <td><label>:</label></td>
            <td>{{ $k->Gaji }}</td>
        </tr>
    </table>
	@endforeach

@endsection
