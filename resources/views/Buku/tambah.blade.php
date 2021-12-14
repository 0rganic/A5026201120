@extends('layout.bahagia')

@section('title', 'CRUD Tambah Buku')
@section('judulhalaman', 'Tambah Buku')

@section('konten')



	<a href="/buku"> Kembali</a>

	<br/>
	<br/>

	<form action="/buku/store" method="post">
		{{ csrf_field() }}
        <table class="w3-table">
           <tr>
               <td><label>Merek Buku</label></td>
               <td><label>:</label></td>
               <td> <input type="text" name="merek" required="required"> </td>
           </tr>
           <tr>
               <td><label>Stok</label></td>
               <td><label>:</label></td>
               <td><input type="number" name="stok" required="required"> </td>
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

@endsection
