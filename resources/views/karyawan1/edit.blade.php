@extends('layout.bahagia')

@section('title', 'CRUD Edit Data Karyawan')
@section('judulhalaman', 'Edit Data Karyawan')

@section('konten')



	<a href="/karyawan1"> Kembali</a>




	@foreach($karyawan1 as $k)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
        <table class="w3-table">
            <input type="hidden" name="id" value="{{ $k->NIP  }}"> <br/>
            <tr>
                <td><label>Nama Karyawan</label></td>
                <td><label>:</label></td>
                <td><input type="text" required="required" name="nama" value="{{ $k->Nama }}"> </td>
            </tr>
            <tr>
                <td><label>Pangkat</label></td>
                <td><label>:</label></td>
                <td><input type="text" required="required" name="pangkat" value="{{ $k->Pangkat }}"> </td>
            </tr>
            <tr>
                <td><label>Gaji</label></td>
                <td><label>:</label></td>
                <td><input type="text" required="required" name="angka3" id="angka3" value="{{ $k->Gaji }}"> </td>

            </tr>
        </table>
        <input type="submit" class="btn btn-primary" value="Simpan Data">
    </form>
	@endforeach

@endsection
