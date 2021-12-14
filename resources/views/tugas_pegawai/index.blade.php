@extends('layout.bahagia')

@section('title', 'CRUD Data Tugas Pegawai')
@section('judulhalaman', 'Data Tugas Pegawai')

@section('konten')


	<a href="/tugas/tambah"> + Tambah Tugas Pegawai Baru</a>

	<br/>
	<br/>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;Cari Data Pegawai</p>

    <table class="w3-table">
        <tr>
            <div class="container" text-align="center">
                <form action="/tugas/cari" method="GET">
                   <td> <input type="text" class="form-control" name="cari" placeholder="Cari Tugas Pegawai berdasarkan Nama pegawai atau Nama tugas .." value="{{ old('cari') }}"></td>
                   <td> <input type="submit" class="btn btn-default" value="CARI"></td>
                </form>
            </div>
        </tr>
    </table>
    <br>
	<table class="table">
		<tr>
			<th>Nama Pegawai</th>
			<th>NamaTugas</th>
            <th>Opsi</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->NamaTugas }}</td>

			<td>
                <a href="/tugas/view/{{ $p->ID }}">View Details</a>
				|
				<a href="/tugas/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


    {{ $tugas->links() }}
@endsection
