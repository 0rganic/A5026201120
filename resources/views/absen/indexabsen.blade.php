@extends('layout.bahagia')

@section('title', 'CRUD Tabel Absen')
@section('judulhalaman', 'Daftar Absensi Pegawai')

@section('konten')


	<a href="/absen/add"> + Tambah Absensi</a>

	<br/>
	<br/>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;Cari Data Absensi</p>

    <table class="w3-table">
        <tr>
            <div class="container" text-align="center">
                <form action="/absen/cari" method="GET">
                   <td> <input type="text" class="form-control" name="cari" placeholder="Cari berdasarkan nama .." value="{{ old('cari') }}"></td>
                   <td> <input type="submit" class="btn btn-default" value="CARI"></td>
                </form>
            </div>
        </tr>
    </table>

    <br>

	<table class="table">
		<tr>

			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Status }}</td>
			<td>
                <a href="/absen/view/{{ $a->ID }}">View Details</a>
				|
				<a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links() }}
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>


@endsection

