<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggarisController extends Controller
{
    public function index()
    {
        // mengambil data dari table absen
        $penggaris = DB::table('penggaris')->paginate(5);
        // mengirim data absen ke view indexabsen
        return view('penggaris.index', ['penggaris' => $penggaris]);
    }
    public function add()
    {
        // mengambil data dari table pegawai
        $penggaris = DB::table('penggaris')->orderBy('merkpenggaris', 'asc')->get(); //defaultnya urut Primary Key
        // memanggil view add
        return view('penggaris.add', ['penggaris' => $penggaris]);
    }
    public function store(Request $request)
    {
        // insert data ke table absen
        DB::table('penggaris')->insert([

            'merkpenggaris' => $request->merkpenggaris,
            'stockpenggaris' => $request->stockpenggaris,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/penggaris');
    }
    public function edit($id)
    {
        // mengambil data absen berdasarkan id yang dipilih
        $penggaris = DB::table('penggaris')->where('kodepenggaris', $id)->get();

        // passing data absen yang didapat ke view update.blade.php
        return view('penggaris.edit', ['penggaris' => $penggaris]);
    }
    public function update(Request $request)
    {
        // update data absen
        DB::table('penggaris')->where('kodepenggaris', $request->id)->update([

            'merkpenggaris' => $request->merkpenggaris,
            'stockpenggaris' => $request->stockpenggaris,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/penggaris');
    }
    public function hapus($id)
    {
        // menghapus data absen berdasarkan id yang dipilih
        DB::table('penggaris')->where('kodepenggaris', $id)->delete();

        // alihkan halaman ke halaman absen
        return redirect('/penggaris');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$penggaris = DB::table('penggaris')
		->where('merkpenggaris','like',"%".$cari."%")
        ->orWhere('stockpenggaris','like', "%" . $cari . "%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('penggaris.index',['penggaris' => $penggaris]);

	}
    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $penggaris = DB::table('penggaris')->where('kodepenggaris', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('penggaris.detail', ['penggaris' => $penggaris]);
    }
}
