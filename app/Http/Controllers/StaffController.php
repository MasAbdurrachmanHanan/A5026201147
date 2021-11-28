<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StaffController extends Controller
{
    public function index()
    {
        //DB::table('')->get();
        // mengambil data dari table staff
        $staff = DB::table('staff')->get(); //hasil get() adalah array of object

        // mengirim data staff ke view index
        return view('tugassbd.staff.index',['staff' => $staff]);

    }

    // method untuk menampilkan view form tambah staff
public function tambah()
{

	// memanggil view tambah
	return view('tugassbd.staff.tambah');

}

// method untuk insert data ke table staff
public function store(Request $request)
{
	// insert data ke table staff
	DB::table('staff')->insert([
		'StaffID' => $request->StaffID,
		'NamaDepan' => $request->NamaDepan,
		'NamaBelakang' => $request->NamaBelakang,
        'AsalDepartemen' => $request->AsalDepartemen,
        'KodeDivisi' => $request->KodeDivisi,
        'NRP' => $request->NRP,
	]);
	// alihkan halaman ke halaman staff
	return redirect('staff'); //tidak retun view, karena tidak flesibel

}

// method untuk edit data staff
public function edit($StaffID)
{
	// mengambil data staff berdasarkan id yang dipilih
	$staff = DB::table('staff')->where('id',$StaffID)->get();
	// passing data staff yang didapat ke view edit.blade.php
	return view('tugassbd.staff.edit',['staff' => $staff]);

}

// update data staff
public function update(Request $request)
{
	// update data staff
	DB::table('staff')->where('id',$request->StaffID)->update([
		'StaffID' => $request->StaffID,
		'NamaDepan' => $request->NamaDepan,
		'NamaBelakang' => $request->NamaBelakang,
        'AsalDepartemen' => $request->AsalDepartemen,
        'KodeDivisi' => $request->KodeDivisi,
        'NRP' => $request->NRP,
	]);
	// alihkan halaman ke halaman staff
	return redirect('/staff');
}

// method untuk hapus data staff
public function hapus($StaffID)
{
	// menghapus data staff berdasarkan id yang dipilih
	DB::table('staff')->where('id',$StaffID)->delete();

	// alihkan halaman ke halaman staff
	return redirect('/staff');
}

}
