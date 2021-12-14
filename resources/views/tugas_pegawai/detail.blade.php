@extends('layout.bahagia')

@section('title', 'CRUD Detail Tugas Pegawai')
@section('judulhalaman', 'Detail Tugas Pegawai')

@section('konten')



	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
    {{ csrf_field() }}

    <table class="table">
        <tr>
            <th>IDPegawai</th>
            <th>Tanggal </th>
            <th>NamaTugas </th>
            <th>Status </th>
        </tr>
        <tr>
            <td>{{ $p->IDPegawai }}</td>
		    <td>{{ $p->Tanggal }}</td>
            <td>{{ $p->NamaTugas }}</td>
            <td>{{ $p->Status }} </td>
        </tr>
    </table>
	@endforeach

@endsection
