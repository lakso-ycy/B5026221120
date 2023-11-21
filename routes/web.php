<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function () {
    return "<h1>Halo world</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('/ets', function () {
	return view('ETS');
});

Route::get('/tugas1', function () {
	return view('linktree');
});

Route::get('/tugas2', function () {
	return view('layout');
});

Route::get('/materi1week1', function () {
	return view('Hello');
});

Route::get('/materi2week1', function () {
	return view('paragraf');
});

Route::get('/materi4week1', function () {
	return view('link');
});

Route::get('/materi3week1', function () {
	return view('halaman2');
});

Route::get('/materi5week1', function () {
	return view('style');
});

Route::get('/materi1week2', function () {
	return view('responsive');
});

Route::get('/materi2week2', function () {
	return view('validasi');
});

Route::get('/materijs', function () {
	return view('js1');
});

Route::get('/materijs2', function () {
	return view('js2');
});

Route::get('/tugas3', function () {
	return view('https://drive.google.com/drive/folders/1JeM2vtlCxkI4s0nESNm13v_nMMVx06y4?usp=sharing');
});

Route::get('perkalian','App\Http\Controllers\DosenController@index');
Route::get('biodata','App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}','App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');
// route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
