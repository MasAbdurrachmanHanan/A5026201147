<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan1Controller extends Controller
{
    public function index()
    {
        // mengambil data dari table karyawan1
        $karyawan1 = DB::table('karyawan1')->paginate(5);
        // mengirim data absen ke view indexabsen
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }
    public function tambah()
    {

        // memanggil view tambah
        return view('karyawan1.tambah');
    }
    public function store(Request $request)
    {
        // insert data ke table karyawan1
        DB::table('karyawan1')->insert([

            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        // alihkan halaman ke halaman karyawan1
        return redirect('/karyawan1');
    }
    public function hapus($id)
    {
        // menghapus data karyawan1 berdasarkan id yang dipilih
        DB::table('karyawan1')->where('NIP', $id)->delete();

        // alihkan halaman ke halaman karyawan1
        return redirect('/karyawan1');
    }
}
