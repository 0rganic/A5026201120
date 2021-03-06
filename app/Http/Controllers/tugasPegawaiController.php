<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class tugasPegawaiController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        // $tugas = DB::table('tugas')->get();
        $tugas = DB::table('tugas')
            ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('tugas.*', 'pegawai.pegawai_nama')
            ->paginate(3);


        // mengirim data pegawai ke view index
        return view('tugas_pegawai.index', ['tugas' => $tugas]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        // memanggil view tambah
        return view('tugas_pegawai.tambah', ['pegawai' => $pegawai]);
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('tugas')->insert([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }
    // method untuk edit data tugas pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $tugas = DB::table('tugas')->where('ID', $id)->get();
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tugas_pegawai.edit', ['tugas' => $tugas, 'pegawai' => $pegawai]);
    }
    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('tugas')->where('ID', $request->ID)->update([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tugas')->where('ID', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }
    // method cari data pegawai
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $tugas = DB::table('tugas')
            ->where('NamaTugas', 'like', "%" . $cari . "%")
            ->orWhere('pegawai_nama', 'like', "%" . $cari . "%")
            ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('tugas.*', 'pegawai.pegawai_nama')
            ->paginate(3);

        // mengirim data pegawai ke view index
        return view('tugas_pegawai.index', ['tugas' => $tugas]);
    }

    // method untuk melihat detail data pegawai
    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $tugas = DB::table('tugas')->where('ID', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tugas_pegawai.detail', ['tugas' => $tugas]);
    }
}
