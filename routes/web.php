<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\IrbanController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalerifotoController;
use App\Http\Controllers\DatapegawaiController;
use App\Http\Controllers\LinkTerkaitController;
use App\Http\Controllers\SaberpungliController;





Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/berita/{slug}', 'detailberita');
    Route::get('/berita', 'berita');
    Route::get('/ppid', 'ppid');
    Route::get('/saberpungli', 'saberpungli');
    Route::get('/ppid/{jenis}', 'informasi');
    Route::get('/irban/{irban}', 'irban');
});
Route::controller(FormController::class)->group(function () {
    Route::get('/forminformasi', 'forminformasi');
    Route::get('/forminformasi', 'forminformasi');
    Route::post('/forminformasi', 'storedinformasi');
    Route::get('/formkeberatan', 'formkeberatan');
    Route::post('/formkeberatan', 'storedkeberatan');
    Route::get('/cek-laporan', 'ceklaporan');
    Route::post('/cek-laporan', 'carilaporan');
    Route::get('/cek-laporan/{jenis}/{id}', 'balasan')->name('balasan');
});

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/cek', function () {
    return view('balasan');
});
Route::get('/set', function () {
    return view('setelah');
});




Route::get('/admin/irban1/capaiankinerja', function () {

});
Route::get('/admin/irban1/agenda/tambah', function () {
    return view('admin.irban.irban1.createagenda');
});
Route::get('/admin/irban1/capaiankinerja/create', function () {
    return view('admin.irban.irban1.createcapaian');
});



Route::prefix('admin')->group(function () {
    Route::resource('linkterkait', LinkTerkaitController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('datapegawai', DatapegawaiController::class);
    Route::resource('galerifoto', GalerifotoController::class);
    Route::resource('saberpungli', SaberpungliController::class);
    Route::resource('agenda', AgendaController::class);
    Route::get('ppid', [PpidController::class, 'vie']);
    Route::prefix('ppid')->group(function () {
        Route::resource('kelolainformasi', PpidController::class);
        Route::get('kelolatampilan', [PpidController::class, 'tampilan']);
    });
    Route::get('/irban', [IrbanController::class, 'irban']);
    Route::prefix('irban')->group(function () {
        Route::get('{irban}', [IrbanController::class, 'index'])->name('irban');
        Route::get('{irban}/{jenis}/edit', [IrbanController::class, 'edit']);
        Route::patch('{irban}/{jenis}', [IrbanController::class, 'update']);
        Route::get('{irban}/agenda', [IrbanController::class, 'agenda']);
        Route::get('{irban}/capaiankinerja', [IrbanController::class, 'capaiankinerja']);
    });
    Route::get('laporan', [LaporanController::class, 'index']);
    Route::prefix('laporan')->group(function () {
        Route::get('ppid', [LaporanController::class, 'ppid']);
        Route::get('ppid/{jenis}/{id}/balasan', [LaporanController::class, 't']);
        Route::post('ppid/{jenis}/{id}/balasan', [LaporanController::class, 'balas']);
        Route::get('ppid/{jenis}/{id}', [LaporanController::class, 'lihat']);
        Route::get('saberpungli', [LaporanController::class, 'saberpungli']);
    });
});