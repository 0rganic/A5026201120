@extends('layout.bahagia')

@section('title', 'CRUD Data Pegawai')
@section('judulhalaman', 'Data Pegawai')

@section('konten')



	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;Cari Data Pegawai</p>

    <table class="w3-table">
        <tr>
            <div class="container" text-align="center">
                <form action="/pegawai/cari" method="GET">
                   <td> <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}"></td>
                   <td> <input type="submit" class="btn btn-default" value="CARI"></td>
                </form>
            </div>
        </tr>
    </table>

    <br>

	<table class="table">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}">View Details</a>
				|
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}


@endsection
