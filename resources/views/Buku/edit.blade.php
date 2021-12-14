@extends('layout.bahagia')

@section('title', 'CRUD Edit Data Buku')
@section('judulhalaman', 'Edit Data Buku')

@section('konten')



	<a href="/buku"> Kembali</a>




	@foreach($buku as $b)
	<form action="/buku/update" method="post">
		{{ csrf_field() }}
        <table class="w3-table">
            <input type="hidden" name="id" value="{{ $b->kodebuku  }}"> <br/>
            <tr>
                <td><label>Merek Buku</label></td>
                <td><label>:</label></td>
                <td><input type="text" required="required" name="merek" value="{{ $b->merkbuku }}"> </td>
            </tr>
            <tr>
                <td><label>Stok</label></td>
                <td><label>:</label></td>
                <td><input type="number" required="required" name="stok" value="{{ $b->stockbuku }}"> </td>
            </tr>
            <tr>
                <td><label>Ketersediaan Buku</label></td>
                <td><label>:</label></td>
                <td><input type="radio" id="html" name="ketersediaan" value="A"checked="checked">
                <label for="html">Available</label><br>
                <input type="radio" id="css" name="ketersediaan" value="U">
                <label for="css">Unavailable</label><br>
            </tr>
        </table>
        <input type="submit" class="btn btn-primary" value="Simpan Data">
    </form>
	@endforeach

@endsection
