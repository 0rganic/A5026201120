
   @extends('layout.bahagia')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen')

   @section('konten')
   <p> <a href="/absen"> Kembali</a></p>
   <form action="/absen/store" method="post">
        {{ csrf_field() }}
        <table class="w3-table">
            <tr>
                <td><label>IDPegawai</label></td>
                <td><label>:</label></td>
                <td><select name="idpegawai" >
                @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
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
                <td><input type="radio" id="html" name="status" value="I">
                <label for="html">Izin</label><br>
                <input type="radio" id="css" name="status" value="S" checked="checked">
                <label for="css">Sakit</label><br>
                <input type="radio" id="javascript" name="status" value="A">
                <label for="javascript">Alpha</label></td>
            </tr>
        </table>
        <p><input type="submit" class="btn btn-primary" value="Simpan Data"></p>
    </form>

@endsection
