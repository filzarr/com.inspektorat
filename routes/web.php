<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IrbanController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalerifotoController;
use App\Http\Controllers\DatapegawaiController;
use App\Http\Controllers\GaleriVideoController;
use App\Http\Controllers\LinkTerkaitController;
use App\Http\Controllers\SaberpungliController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\VidioKegiatanController;


// GENERAL
Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/menu/{judul}', 'menu');
    Route::get('/berita/{slug}', 'detailberita');
    Route::get('/banner/{slug}', 'banner');
    Route::get('/agenda/{slug}', 'agenda');
    Route::get('/agenda', 'agend')->name('agend');
    Route::get('/berita', 'berita')->name('berta');
    Route::post('/comment/{idberita}', 'comment');
    Route::get('/ppid', 'ppid');
    Route::get('/saberpungli', 'saberpungli');
    Route::get('/ppid/{jenis}', 'informasi');
    Route::get('/irban/{irban}', 'irban');
});
Route::controller(FormController::class)->group(function () {
    Route::get('/forminformasi', 'forminformasi');
    Route::post('/forminformasi', 'storedinformasi');
    Route::get('/formkeberatan', 'formkeberatan');
    Route::post('/formkeberatan', 'storedkeberatan');
    Route::get('/formsaberpungli', 'formsaberpungli');
    Route::post('/formsaberpungli', 'storedsaberpungli');
    Route::get('/cek-laporan', 'ceklaporan');
    Route::post('/cek-laporan', 'carilaporan');
    Route::get('/cek-laporan/{jenis}/{id}', 'balasan')->name('balasan');
});

Route::get('/admin', [ AdminController::class, 'index'])->middleware('auth');

// ADMIN'S ROUTE
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('linkterkait', LinkTerkaitController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('vidiokegiatan', VidioKegiatanController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('datapegawai', DatapegawaiController::class);
    Route::resource('galerifoto', GalerifotoController::class);
    Route::resource('galerivideo', GaleriVideoController::class);
    Route::get('saberpungli', [ SaberpungliController::class, 'index']);
    Route::get('saberpungli/{id}/edit', [ SaberpungliController::class, 'edit']);
    Route::patch('saberpungli/{id}',[ SaberpungliController::class, 'storetampilan']);
    Route::resource('agenda', AgendaController::class);
    Route::get('ppid', [PpidController::class, 'vie']);
    Route::post('ppid', [PpidController::class, 'store']);
    Route::prefix('ppid')->group(function () {
        Route::resource('kelolainformasi', PpidController::class);
        Route::get('kelolatampilan', [PpidController::class, 'tampilan']);
        Route::get('kelolatampilan/{id}', [PpidController::class, 'edittampilan']);
        Route::patch('kelolatampilan/{id}', [PpidController::class, 'storetampilan']);
    });

    Route::get('/irban', [IrbanController::class, 'irban']);
    Route::prefix('irban')->group(function () {
        Route::get('{irban}', [IrbanController::class, 'index'])->name('irban');
        Route::get('{irban}/create', [IrbanController::class, 'create'])->name('irban');
        Route::get('{irban}/{id}/hapus', [IrbanController::class, 'destroy'])->name('irban');
        Route::post('{irban}', [IrbanController::class, 'store'])->name('irban');
        Route::get('{irban}/{jenis}/edit', [IrbanController::class, 'edit']);
        Route::patch('{irban}/{jenis}', [IrbanController::class, 'update']);
        Route::get('{irban}/agenda', [IrbanController::class, 'agenda'])->name('irb');
        Route::get('{irban}/agenda/create', [IrbanController::class, 'agendacreate']);
        Route::post('{irban}/agenda', [IrbanController::class, 'agendastore']);
        Route::post('{irban}/agenda/{id}/edit', [IrbanController::class, 'agendaedit']);
        Route::patch('{irban}/agenda/{id}', [IrbanController::class, 'agendaupdate']);
        Route::get('{irban}/agenda/{id}', [IrbanController::class, 'agendadestroy']);
        Route::get('{irban}/capaiankinerja', [IrbanController::class, 'capaiankinerja']);
 });

    Route::get('laporan', [LaporanController::class, 'index']);
    Route::prefix('laporan')->group(function () {
        Route::get('ppid', [LaporanController::class, 'ppid']);
        Route::get('ppid/{jenis}/{id}/balasan', [LaporanController::class, 't']);
        Route::post('ppid/{jenis}/{id}/balasan', [LaporanController::class, 'balas']);
        Route::get('ppid/{jenis}/{id}', [LaporanController::class, 'lihat']);
        Route::get('saberpungli', [LaporanController::class, 'saberpungli']);
        Route::get('saberpungli/{id}', [LaporanController::class, 'lsaberpungli']);
        Route::get('saberpungli/{id}/balasan', [LaporanController::class, 'lihatsaberpungli']);
        Route::post('saberpungli/{id}/balasan', [LaporanController::class, 'storedsaberpungli']);
    });
});
Route::post('image-upload', [ImageUploadController::class, 'storeImage'])->name('image.upload');
require __DIR__.'/auth.php';


// Route::get('/admin/irban1/capaiankinerja', function () {

// });

// Route::get('/', function () {
//     return echo "not found";
// });

