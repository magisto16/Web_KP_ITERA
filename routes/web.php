<?php

use App\Instansi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

//route::get('/','Controller@index')->name('index');

Route::get('/', function () {
    //Mengambil data
        $instansi = Instansi::all();
    //Mengirim data
        return view('index',['instansi' => $instansi]);
});


Auth::routes();

//Verifikasi Email
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('koor')->prefix('koor')->name('koor.')->middleware('can:koordinator')->group(function(){
    Route::resource('/user','UserController',['except'=>['show','store']]);
    Route::resource('/','KoorController',['only'=>'index']);
    Route::resource('/laporan','LaporanController',['only'=>['index','show']]);
    Route::resource('/cetak','CetakController',['only'=>['index','show']]);
    Route::resource('/validasi','ValidasiController',['only'=>['index','show','edit','update']]);
    Route::resource('/dopem','DopemController',['except'=>['store','create','destroy','update','edit']]);
    Route::resource('/mahasiswa','MhsController',['only'=>['show','edit','index','update']]);
    Route::resource('/assign','AssignController',['only'=>['edit','update']]);
});

Route::namespace('mahasiswa')->prefix('mahasiswa')->middleware('can:mahasiswa')->name('mahasiswa.')->group(function(){
    Route::resource('/','MahasiswaController',['only'=>'index']);
    Route::resource('/daftar','DaftarController',['only'=>['edit','update']]);
    Route::resource('/seminar','SeminarController',['only'=>['edit','update']]);
    Route::resource('/referensi','ReferensiController',['only'=>'index']);
    Route::resource('/unduh','UnduhController',['only'=>'index']);
    Route::resource('/upload','UploadController',['only'=>['index','laporan','update']]);
});

Route::namespace('dosen')->prefix('dosen')->middleware('can:dosen')->name('dosen.')->group(function(){
    Route::resource('/','DosenController',['only'=>['index','store']]);
    Route::resource('/mahasiswa','MahasiswaController',['only'=>['index','show']]);
    Route::resource('/laporan','LaporanController',['only'=>['index','show']]);
    Route::resource('/nilai','NilaiController',['only'=>['index','edit','update']]);
    Route::resource('/seminar','SeminarController',['only'=>['index','edit','update']]);
});