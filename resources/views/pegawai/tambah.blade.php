@extends('layout.bahagia')

@section('title', 'CRUD Tambah Pegawai')
@section('judulhalaman', 'Tambah Pegawai')

@section('konten')



	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <table class="w3-table">
           <tr>
               <td><label>Nama</label></td>
               <td><label>:</label></td>
               <td> <input type="text" name="nama" required="required"> </td>
           </tr>
           <tr>
               <td><label>Jabatan</label></td>
               <td><label>:</label></td>
               <td><input type="text" name="jabatan" required="required"> </td>
           </tr>
           <tr>
               <td><label>Umur</label></td>
               <td><label>:</label></td>
               <td><input type="number" name="umur" required="required"> </td>
           </tr>
           <tr>
               <td><label>Alamat</label></td>
               <td><label>:</label></td>
               <td><textarea name="alamat" required="required"></textarea> </td>
           </tr>
        </table>
        <input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>

@endsection
