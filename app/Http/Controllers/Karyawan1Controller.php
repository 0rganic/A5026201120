<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan1Controller extends Controller
{
    public function index()
    {
        // DB::table('')->get();
        // mengambil data dari table pegawai
        // $pegawai = DB::table('pegawai')->get(); //hasil get() adalah array of object [][]
        $karyawan1 = DB::table('karyawan1')->paginate(10);
        // mengirim data pegawai ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]); //teknik komunikasi / passing value antara controller dan view
    }
    public function edit($id)
    {
        // mengambil data karyawan berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('karyawan1.edit', ['karyawan1' => $karyawan1]);
    }
    // update data karyawan
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('karyawan1')->where('NIP', $request->id)->update([
            'Nama' => $request->nama,
            'Pangkat' => $request->pangkat,
            'Gaji' => $request->gaji,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan1');
    }
    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('karyawan1.detail', ['karyawan1' => $karyawan1]);
    }
}
