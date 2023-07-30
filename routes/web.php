<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/irban', function () {
    return view('irban');
});
Route::get('/ppid', function () {
    return view('ppid');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/informasi', function () {
    return view('informasi');
});
Route::get('/forminformasi', function () {
    return view('forminformasi');
});
Route::get('/formkeberatan', function () {
    return view('formkeberatan');
});
Route::get('/saberpungli', function () {
    return view('saberpungli');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/berita', function () {
    return view('admin.berita.index');
});
Route::get('/admin/menu', function () {
    return view('admin.menu.index');
});
Route::get('/admin/agenda', function () {
    return view('admin.agenda.index');
});
Route::get('/admin/ppid', function () {
    return view('admin.ppid.index');
});
Route::get('/admin/ppid/kelolatampilan', function () {
    return view('admin.ppid.kelolatampilan');
});
Route::get('/admin/ppid/kelolainformasi', function () {
    return view('admin.ppid.informasi');
});
Route::get('/admin/galerifoto', function () {
    return view('admin.galerifoto.index');
});
Route::get('/admin/irban', function () {
    return view('admin.irban.index');
});
Route::get('/admin/irban1', function () {
    return view('admin.irban.irban1.index');
});
Route::get('/admin/irban1/agenda', function () {
    return view('admin.irban.irban1.agenda');
});
Route::get('/admin/irban1/capaiankinerja', function () {
    return view('admin.irban.irban1.capaian');
});
Route::get('/admin/irban1/agenda/tambah', function () {
    return view('admin.irban.irban1.createagenda');
});
Route::get('/admin/irban1/capaiankinerja/create', function () {
    return view('admin.irban.irban1.createcapaian');
});
Route::get('/admin/datapegawai', function () {
    return view('admin.datapegawai.index');
});
Route::get('/admin/banner', function () {
    return view('admin.banner.index');
});
Route::get('/admin/laporan', function () {
    return view('admin.laporan.index');
});
Route::get('/admin/laporan/ppid', function () {
    return view('admin.laporan.ppid.index');
});
Route::get('/admin/laporan/saberpungli', function () {
    return view('admin.laporan.saberpungli.index');
});
Route::get('/admin/saberpungli', function () {
    return view('admin.saberpungli.index');
});
Route::get('/admin/linkterkait', function () {
    return view('admin.linkterkait.index');
});
Route::get('/admin/berita/tambah', function () {
    return view('admin.berita.create');
});
Route::get('/admin/menu/tambah', function () {
    return view('admin.menu.create');
});
Route::get('/admin/agenda/tambah', function () {
    return view('admin.agenda.create');
});
Route::get('/admin/galerifoto/tambah', function () {
    return view('admin.galerifoto.create');
});
Route::get('/admin/datapegawai/tambah', function () {
    return view('admin.datapegawai.create');
});
Route::get('/admin/banner/tambah', function () {
    return view('admin.banner.create');
});
Route::get('/admin/linkterkait/tambah', function () {
    return view('admin.linkterkait.create');
});
Route::get('/admin/ppid/kelolainformasi/tambah', function () {
    return view('admin.ppid.create');
});