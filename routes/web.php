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

//jika ternyata butuh ngeload banyak proses
Route::get('isiannama', "ViewController@showForm") ;
Route::post('greetings', "ViewController@resultGreetings") ;
