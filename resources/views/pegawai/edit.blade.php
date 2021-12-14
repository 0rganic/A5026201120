@extends('layout.bahagia')

@section('title', 'CRUD Edit Pegawai')
@section('judulhalaman', 'Edit Pegawai')

@section('konten')



	<a href="/pegawai"> Kembali</a>




	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <table class="w3-table">
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
            <tr>
                <td><label>Nama</label></td>
                <td><label>:</label></td>
                <td><input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> </td>
            </tr>
            <tr>
                <td><label>Jabatan</label></td>
                <td><label>:</label></td>
                <td><input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> </td>
            </tr>
            <tr>
                <td><label>Umur</label></td>
                <td><label>:</label></td>
                <td><input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> </td>
            </tr>
            <tr>
                <td><label>Alamat</label></td>
                <td><label>:</label></td>
                <td><textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> </td> <br>
            </tr>
        </table>
        <input type="submit" class="btn btn-primary" value="Simpan Data">
    </form>
	@endforeach

@endsection
