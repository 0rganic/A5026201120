@extends('layout.bahagia')

@section('title', 'CRUD Data Pegawai')
@section('judulhalaman', 'Data Pegawai')

@section('konten')



	<a href="/karywan1/tambah"> + Tambah karyawan Baru</a>

	<br/>
	<br/>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;Cari Data karyawan</p>

    <table class="w3-table">
        <tr>
            <div class="container" text-align="center">
                <form action="/karyawan1/cari" method="GET">
                   <td> <input type="text" class="form-control" name="cari" placeholder="Cari karyawan berdasarkan nama atau alamat .." value="{{ old('cari') }}"></td>
                   <td> <input type="submit" class="btn btn-default" value="CARI"></td>
                </form>
            </div>
        </tr>
    </table>

    <br>

	<table class="table">
		<tr>
			<th>Nama Karyawan</th>
            <th>Pangkat</th>
            <th>Gaji</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $k)
		<tr>
			<td>{{ $k->Nama }}</td>
            <td>{{ $k->Pangkat }}</td>
			<td>{{ $k->Gaji  }}</td>
			<td>
                <a href="/karyawan1/view/{{ $k->NIP }}">View Details</a>
				|
				<a href="/karyawan1/edit/{{ $k->NIP }}">Edit</a>
				|
				<a href="/karyawan1/hapus/{{ $k->NIP }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $karyawan1->links() }}


@endsection
