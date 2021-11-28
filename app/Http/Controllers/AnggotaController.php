<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AnggotaController extends Controller
{
    public function index()
    {
        //DB::table('')->get();
        // mengambil data dari table anggota
        $anggota = DB::table('anggota')->get(); //hasil get() adalah array of object

        // mengirim data anggota ke view index
        return view('tugassbd.anggota.index',['anggota' => $anggota]);

    }

    // method untuk menampilkan view form tambah anggota
public function tambah()
{

	// memanggil view tambah
	return view('tugassbd.anggota.tambah');

}

// method untuk insert data ke table anggota
public function store(Request $request)
{
	// insert data ke table anggota
	DB::table('anggota')->insert([
		'NamaDepan' => $request->NamaDepan,
		'NamaBelakang' => $request->NamaBelakang,
		'NRP' => $request->NRP,
		'AsalDepartemen' => $request->AsalDepartemen,
        'NamaProker' => $request->NamaProker,
	]);
	// alihkan halaman ke halaman anggota
	return redirect('/anggota'); //tidak retun view, karena tidak flesibel

}

// method untuk edit data anggota
public function edit($NRP)
{
	// mengambil data anggota berdasarkan id yang dipilih
	$anggota = DB::table('anggota')->where('id',$NRP)->get();
	// passing data anggota yang didapat ke view edit.blade.php
	return view('tugassbd.anggota.edit',['anggota' => $anggota]);

}

// update data anggota
public function update(Request $request)
{
	// update data anggota
	DB::table('anggota')->where('id',$request->NRP)->update([
		'NamaDepan' => $request->NamaDepan,
		'NamaBelakang' => $request->NamaBelakang,
		'NRP' => $request->NRP,
		'AsalDepartemen' => $request->AsalDepartemen,
        'NamaProker' => $request->NamaProker,
	]);
	// alihkan halaman ke halaman anggota
	return redirect('/anggota');
}

// method untuk hapus data anggota
public function hapus($NRP)
{
	// menghapus data anggota berdasarkan id yang dipilih
	DB::table('anggota')->where('id',$NRP)->delete();

	// alihkan halaman ke halaman anggota
	return redirect('/anggota');
}

}
