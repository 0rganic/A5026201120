@extends('layout.bahagia')

@section('title', 'CRUD Edit Pegawai')
@section('judulhalaman', 'Edit Pegawai')

@section('konten')



	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
    {{ csrf_field() }}

    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Jabatan </th>
            <th>Umur </th>
            <th>Alamat </th>
        </tr>
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
		    <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }} </td>
        </tr>
    </table>
	@endforeach

@endsection
