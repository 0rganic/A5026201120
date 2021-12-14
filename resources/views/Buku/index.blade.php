@extends('layout.bahagia')

@section('title', 'CRUD Data Buku')
@section('judulhalaman', 'Data Buku')

@section('konten')



	<a href="/buku/tambah"> + Tambah Buku Baru</a>

	<br/>
	<br/>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;Cari Data Buku</p>

    <table class="w3-table">
        <tr>
            <div class="container" text-align="center">
                <form action="/buku/cari" method="GET">
                   <td> <input type="text" class="form-control" name="cari" placeholder="Cari berdasarkan merek .." value="{{ old('cari') }}"></td>
                   <td> <input type="submit" class="btn btn-default" value="CARI"></td>
                </form>
            </div>
        </tr>
    </table>

    <br>

	<table class="table">
		<tr>
			<th>Merek Buku</th>
			<th>Stok</th>
			<th>Opsi</th>
		</tr>
		@foreach($buku as $b)
		<tr>
			<td>{{ $b->merkbuku }}</td>
			<td>{{ $b->stockbuku }}</td>
			<td>
                <a href="/buku/view/{{ $b->kodebuku }}">View Details</a>
				|
				<a href="/buku/edit/{{ $b->kodebuku }}">Edit</a>
				|
				<a href="/buku/hapus/{{ $b->kodebuku }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $buku->links() }}


@endsection
