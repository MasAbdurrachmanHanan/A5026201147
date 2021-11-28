<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StaffAhliController extends Controller
{
    public function index()
    {
        //DB::table('')->get();
        // mengambil data dari table staffahli
        $staffahli = DB::table('staffahli')->get(); //hasil get() adalah array of object

        // mengirim data staffahli ke view index
        return view('tugassbd.staffahli.index',['staffahli' => $staffahli]);

    }

    // method untuk menampilkan view form tambah staffahli
public function tambah()
{

	// memanggil view tambah
	return view('tugassbd.staffahli.tambah');

}

// method untuk insert data ke table staffahli
public function store(Request $request)
{
	// insert data ke table staffahli
	DB::table('staffahli')->insert([
		'StaffAhliID' => $request->StaffAhliID,
		'NamaDepan' => $request->NamaDepan,
		'NamaBelakang' => $request->NamaBelakang,
        'AsalDepartemen' => $request->AsalDepartemen,
        'KodeDivisi' => $request->KodeDivisi,
        'NRP' => $request->NRP,
	]);
	// alihkan halaman ke halaman staffahli
	return redirect('staffahli'); //tidak retun view, karena tidak flesibel

}

// method untuk edit data staffahli
public function edit($StaffAhliID)
{
	// mengambil data staffahli berdasarkan id yang dipilih
	$staffahli = DB::table('staffahli')->where('id',$StaffAhliID)->get();
	// passing data staffahli yang didapat ke view edit.blade.php
	return view('tugassbd.staffahli.edit',['staffahli' => $staffahli]);

}

// update data staffahli
public function update(Request $request)
{
	// update data staffahli
	DB::table('staffahli')->where('id',$request->StaffAhliID)->update([
		'StaffAhlliID' => $request->StaffAhliID,
		'NamaDepan' => $request->NamaDepan,
		'NamaBelakang' => $request->NamaBelakang,
        'AsalDepartemen' => $request->AsalDepartemen,
        'KodeDivisi' => $request->KodeDivisi,
        'NRP' => $request->NRP,
	]);
	// alihkan halaman ke halaman staffahli
	return redirect('/staffahli');
}

// method untuk hapus data staffahli
public function hapus($StaffAhliID)
{
	// menghapus data staffahli berdasarkan id yang dipilih
	DB::table('staffahli')->where('id',$StaffAhliID)->delete();

	// alihkan halaman ke halaman staffahli
	return redirect('/staffahli');
}

}
