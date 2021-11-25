<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PendapatanController extends Controller
{
    public function index()
    {
        //DB::table('')->get();
        // mengambil data dari table pendapatan
        $pendapatan = DB::table('pendapatan')->get(); //hasil get() adalah array of object

        // mengirim data pendapatan ke view index
        return view('pendapatan.index',['pendapatan' => $pendapatan]);

    }

    // method untuk menampilkan view form tambah pendapatan
public function tambah()
{

	// memanggil view tambah
	return view('pendapatan.tambah');

}

// method untuk insert data ke table pendapatan
public function store(Request $request)
{
	// insert data ke table pendapatan
	DB::table('pendapatan')->insert([
		'IDPegawai' => $request->IDPegawai,
		'Bulan' => $request->Bulan,
		'Tahun' => $request->Tahun,
		'Gaji' => $request->Gaji,
        'Tunjangan' => $request->Tunjangan,
	]);
	// alihkan halaman ke halaman pendapatan
	return redirect('/pendapatan'); //tidak retun view, karena tidak flesibel

}

// method untuk edit data pendapatan
public function edit($ID)
{
	// mengambil data pendapatan berdasarkan id yang dipilih
	$pendapatan = DB::table('pendapatan')->where('id',$ID)->get();
	// passing data pendapatan yang didapat ke view edit.blade.php
	return view('pendapatan.edit',['pendapatan' => $pendapatan]);

}

// update data pendapatan
public function update(Request $request)
{
	// update data pendapatan
	DB::table('pendapatan')->where('id',$request->ID)->update([
		'IDPegawai' => $request->IDPegawai,
		'Bulan' => $request->Bulan,
		'Tahun' => $request->Tahun,
		'Gaji' => $request->Gaji,
        'Tunjangan' => $request->Tunjangan,
	]);
	// alihkan halaman ke halaman pendapatan
	return redirect('/pendapatan');
}

// method untuk hapus data pendapatan
public function hapus($ID)
{
	// menghapus data pendapatan berdasarkan id yang dipilih
	DB::table('pendapatan')->where('id',$ID)->delete();

	// alihkan halaman ke halaman pendapatan
	return redirect('/pendapatan');
}

}
