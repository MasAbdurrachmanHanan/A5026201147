<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//tambahakan tugas 4
Route::get('tugas4', function () {
    return view('htmltugas4');
});

Route::get('praktikum2', function () {
    //ddibagin ini tidak banyak proses / persiapan meload form
    return view('htmlprak2');
});

//tugassbd
//anggota
Route::get('/anggota','AnggotaController@index');
Route::get('/anggota/tambah','AnggotaController@tambah');
Route::post('/anggota/store','AnggotaController@store');
Route::get('/anggota/edit/{NRP}','AnggotaController@edit');
Route::post('/anggota/update','AnggotaController@update');
Route::get('/anggota/hapus/{NRP}','AnggotaController@hapus');
//proker
Route::get('/proker','ProkerController@index');
Route::get('/proker/tambah','ProkerController@tambah');
Route::post('/proker/store','ProkerController@store');
Route::get('/proker/edit/{NamaProker}','ProkerController@edit');
Route::post('/proker/update','ProkerController@update');
Route::get('/proker/hapus/{NamaProker}','ProkerController@hapus');
//staff
Route::get('/staff','StaffController@index');
Route::get('/staff/tambah','StaffController@tambah');
Route::post('/staff/store','StaffController@store');
Route::get('/staff/edit/{ID}','StaffController@edit');
Route::post('/staff/update','StaffController@update');
Route::get('/staff/hapus/{ID}','StaffController@hapus');
//staffahli
Route::get('/staffahli','StaffAhliController@index');
Route::get('/staffahli/tambah','StaffAhliController@tambah');
Route::post('/staffahli/store','StaffAhliController@store');
Route::get('/staffahli/edit/{ID}','StaffAhliController@edit');
Route::post('/staffahli/update','StaffAhliController@update');
Route::get('/staffahli/hapus/{ID}','StaffAhliController@hapus');



//jika ternyata butuh ngeload banyak proses
Route::get('isiannama', "ViewController@showForm") ;
Route::post('greetings', "ViewController@resultGreetings") ;
Route::get('isibmi', "ViewController@isiForm") ;
Route::post('hasilbmi', "ViewController@resultHasil") ;
Route::get('ets', "ViewController@etsForm") ;
//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
//route CRUD pendapatan
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{ID}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{ID}','PendapatanController@hapus');
//route CRUD Absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
//route CRUD Penggaris
Route::get('/penggaris','PenggarisController@index');
Route::get('/penggaris/add','PenggarisController@add');
Route::post('/penggaris/store','PenggarisController@store');
Route::get('/penggaris/edit/{id}','PenggarisController@edit');
Route::post('/penggaris/update','PenggarisController@update');
Route::get('/penggaris/hapus/{id}','PenggarisController@hapus');
Route::get('/penggaris/view/{id}','PenggarisController@detail');
Route::get('/penggaris/cari','PenggarisController@cari');
