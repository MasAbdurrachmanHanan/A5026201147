<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProkerController extends Controller
{
    public function index()
    {
        //DB::table('')->get();
        // mengambil data dari table proker
        $proker = DB::table('proker')->get(); //hasil get() adalah array of object

        // mengirim data proker ke view index
        return view('tugassbd.proker.index',['proker' => $proker]);

    }

    // method untuk menampilkan view form tambah proker
public function tambah()
{

	// memanggil view tambah
	return view('tugassbd.proker.tambah');

}

// method untuk insert data ke table proker
public function store(Request $request)
{
	// insert data ke table proker
	DB::table('proker')->insert([
		'NamaProker' => $request->NamaProker,
		'KodeDivisi' => $request->KodeDivisi,
		'TempatProker' => $request->TempatProker,
        'TipeAcara' => $request->TipeAcara,
	]);
	// alihkan halaman ke halaman proker
	return redirect('/proker'); //tidak retun view, karena tidak flesibel

}

// method untuk edit data proker
public function edit($NamaProker)
{
	// mengambil data proker berdasarkan id yang dipilih
	$proker = DB::table('proker')->where('id',$NamaProker)->get();
	// passing data proker yang didapat ke view edit.blade.php
	return view('tugassbd.proker.edit',['proker' => $proker]);

}

// update data proker
public function update(Request $request)
{
	// update data proker
	DB::table('proker')->where('id',$request->NamaProker)->update([
		'NamaProker' => $request->NamaProker,
		'KodeDivisi' => $request->KodeDivisi,
		'TempatProker' => $request->TempatProker,
        'TipeAcara' => $request->TipeAcara,
	]);
	// alihkan halaman ke halaman proker
	return redirect('/proker');
}

// method untuk hapus data proker
public function hapus($NamaProker)
{
	// menghapus data proker berdasarkan id yang dipilih
	DB::table('proker')->where('id',$NamaProker)->delete();

	// alihkan halaman ke halaman proker
	return redirect('/proker');
}

}
