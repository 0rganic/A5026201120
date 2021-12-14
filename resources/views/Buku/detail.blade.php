@extends('layout.bahagia')

@section('title', 'CRUD Detail Buku')
@section('judulhalaman', 'Detail Buku')

@section('konten')



	<a href="/buku"> Kembali</a>

	<br/>
	<br/>

	@foreach($buku as $b)
    {{ csrf_field() }}

    <table class="w3-table">
        <tr>
            <td><label>Merek Buku</label></td>
            <td><label>:</label></td>
            <td>{{ $b->merkbuku }}</td>
        </tr>
        <tr>
            <td><label>Stok</label></td>
            <td><label>:</label></td>
		    <td>{{ $b->stockbuku }}</td>
        </tr>
        <tr>
            <td><label>Ketersediaan</label></td>
            <td><label>:</label></td>
            <td>{{ $b->tersedia }}</td>
        </tr>
    </table>
	@endforeach
    <p>
        Keterangan Status: <br>
        A : Available <br>
        U : Unavailable <br>
        </p>

@endsection
