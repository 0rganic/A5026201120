
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')

   @section('konten')

   <p> <a href="/absen"> Kembali</a></p>
   @foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
        <table class="w3-table">
            <input type="hidden" name="id" value="{{ $a->ID }}">
            <tr>
                <td><label>IDPegawai</label></td>
                <td><label>:</label></td>
                <td><select name="idpegawai" >
                @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                @endforeach
                </select></td>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="meeting-time">Tanggal</label></td>
                    <td><label>:</label></td>
                    <td><input type="datetime-local" id="meeting-time"
                        name="meeting-time" value=""
                        min="2020-06-07T00:00" max="2024-06-14T00:00"></td>
            </tr>
            <tr>
                    <td><label>Status</label></td>
                    <td><label>:</label></td>
                    <td><input type="radio" id="html" name="status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                    <label for="html">Izin</label><br>
                    <input type="radio" id="css" name="status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
                    <label for="css">Sakit</label><br>
                    <input type="radio" id="javascript" name="status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
                    <label for="javascript">Alpha</label></td>
            </tr>
        </table>
        <p><input type="submit" class="btn btn-primary" value="Simpan Data"></p>
	</form>
	@endforeach

   @endsection
