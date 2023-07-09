<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataNilaiController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PerhitunganController;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/front', function () {
//     return view('front');
// });

// Route::get('/main', function () {
//     return view('layout.main');
// });

// // Routing returning simple string
// Route::get('/greeting', function () {
//     return 'My Name is Rakhma.';
// });

// // Routing returning view
// Route::get('/greeting2', function () {
//     return view('greeting');
// });

// Route::get('/greeting3', 
// 'App\Http\Controllers\GreetingController@index');

// routing for user controller

// Route::prefix('user')->group(function () {
//     Route::get('/', [UserController::class, 'index']);
//     Route::get('/store', [UserController::class, 'store']);
//     Route::get('/update', [UserController::class, 'update']);
//     Route::get('/delete', [UserController::class, 'delete']);
    
// });

// Route::controller(UserController::class)->group(function () {
//     Route::get('/', 'index');
//     Route::get('user/add', 'add');
//     Route::get('user/store', 'store');
//     Route::get('user/edit/{id}', 'edit');
//     Route::get('user/update/{id}', 'update');
//     Route::get('user/delete/{id}', 'delete');


Route::get('/', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/datasiswa', [App\Http\Controllers\UserController::class, 'datasiswa']);
Route::get('/perhitunganspk', [App\Http\Controllers\UserController::class, 'perhitunganspk']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/hasil', [App\Http\Controllers\HasilController::class, 'hasil'])->name('hasil');
Route::get('/normalisasi', [App\Http\Controllers\HasilController::class, 'normalisasi'])->name('normalisasi');
Route::get('/kategori', [App\Http\Controllers\HasilController::class, 'kategori'])->name('kategori');



Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'index'])->middleware('auth');
// SPK Set
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// SPK Set
Route::get('/spk', [SpkController::class, 'index'])->name('spk')->middleware('auth');
Route::get('/spk-tambah', [SpkController::class, 'tambahspk'])->name('spk-tambah')->middleware('auth');
Route::post('/spk-prosestambah', [SpkController::class, 'addprosesspk'])->name('spk-prosestambah')->middleware('auth');
Route::get('/spk/{id}/edit-spk', [SpkController::class, 'editspk'])->name('edit-spk')->middleware('auth');
    Route::post('/spk/{id}/edit-spk-proses', [SpkController::class, 'editspkproses'])->name('edit-spk-proses')->middleware('auth');
    Route::get('/spk/{id}/hapus-spk', [SpkController::class, 'hapusspk'])->name('hapus-spk')->middleware('auth');
    // Alternatif Set
    Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif')->middleware('auth');
    Route::get('/alternatif-tambah', [AlternatifController::class, 'tambahalternatif'])->name('alternatif-tambah')->middleware('auth');
    Route::post('/alternatif-prosestambah', [AlternatifController::class, 'addprosesalternatif'])->name('alternatif-prosestambah')->middleware('auth');
    Route::get('/alternatif/{id}/edit-alternatif', [AlternatifController::class, 'editalternatif'])->name('edit-alternatif')->middleware('auth');
    Route::post('/alternatif/{id}/edit-alternatif-proses', [AlternatifController::class, 'editalternatifproses'])->name('edit-alternatif-proses')->middleware('auth');
    Route::get('/alternatif/{id}/hapus-alternatif', [AlternatifController::class, 'hapusalternatif'])->name('hapus-alternatif')->middleware('auth');
    // Data Nilai Set
    Route::get('/datanilai', [DataNilaiController::class, 'index'])->name('datanilai')->middleware('auth');
    Route::get('/datanilai-tambah', [DataNilaiController::class, 'tambahdatanilai'])->name('datanilai-tambah')->middleware('auth');
    Route::post('/datanilai-prosestambah', [DataNilaiController::class, 'addprosesdatanilai'])->name('datanilai-prosestambah')->middleware('auth');
    Route::get('/datanilai/{id}/edit-datanilai', [DataNilaiController::class, 'editdatanilai'])->name('edit-datanilai')->middleware('auth');
    Route::post('/datanilai/{id}/edit-datanilai-proses', [DataNilaiController::class, 'editdatanilaiproses'])->name('edit-datanilai-proses')->middleware('auth');
    Route::get('/datanilai/{id}/hapus-datanilai', [DataNilaiController::class, 'hapusdatanilai'])->name('hapus-datanilai')->middleware('auth');

    // Kriteria Set
    Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria')->middleware('auth');
    Route::get('/kriteria-tambah', [KriteriaController::class, 'tambahkriteria'])->name('kriteria-tambah')->middleware('auth');
    Route::post('/kriteria-prosestambah', [KriteriaController::class, 'addproseskriteria'])->name('kriteria-prosestambah')->middleware('auth');
    Route::get('/kriteria/{id}/edit-kriteria', [KriteriaController::class, 'editkriteria'])->name('edit-kriteria')->middleware('auth');
    Route::post('/kriteria/{id}/edit-kriteria-proses', [KriteriaController::class, 'editkriteriaproses'])->name('edit-kriteria-proses')->middleware('auth');
    Route::get('/kriteria/{id}/hapus-kriteria', [KriteriaController::class, 'hapuskriteria'])->name('hapus-kriteria')->middleware('auth');

    // Kelas Set
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas')->middleware('auth');
    Route::get('/kelas-tambah', [KelasController::class, 'tambahkelas'])->name('kelas-tambah')->middleware('auth');
    Route::post('/kelas-prosestambah', [KelasController::class, 'addproseskelas'])->name('kelas-prosestambah')->middleware('auth');
    Route::get('/kelas/{id}/edit-kelas', [KelasController::class, 'editkelas'])->name('edit-kelas')->middleware('auth');
    Route::post('/kelas/{id}/edit-kelas-proses', [KelasController::class, 'editkelasproses'])->name('edit-kelas-proses')->middleware('auth');
    Route::get('/kelas/{id}/hapus-kelas', [KelasController::class, 'hapuskelas'])->name('hapus-kelas')->middleware('auth');

    // spk Set
    Route::get('/perhitungan', [PerhitunganController::class, 'perhitungansaw'])->name('perhitungan')->middleware('auth');
     
    // Akun Set
    Route::get('/logout', function (){
    \Auth::logout();
    return redirect('/');
}); 
