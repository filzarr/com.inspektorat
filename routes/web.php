<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpidController;
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


// GENERAL
Route::get('/' ,[DashboardController::class, 'index']);

Route::get('/berita/{slug}' ,[DashboardController::class, 'detailberita']);
Route::get('/berita' ,[DashboardController::class, 'berita']);

Route::get('/banner/{slug}', [DashboardController::class, 'detailBanner']);
Route::get('/banner', [DashboardController::class, 'banner']);

Route::get('/irban', function () {
    return view('irban');
});
Route::get('/ppid', function () {
    return view('ppid');
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


// ADMIN'S ROUTE
Route::prefix('admin')->group(function () {
    Route::resource('linkterkait', LinkTerkaitController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('datapegawai', DatapegawaiController::class);
    Route::resource('galerifoto', GalerifotoController::class);
    Route::resource('galerivideo', GaleriVideoController::class);
    Route::resource('saberpungli', SaberpungliController::class);
    Route::resource('agenda', AgendaController::class);
    Route::get('ppid', [PpidController::class, 'vie']);
    Route::post('ppid', [PpidController::class, 'store']);
    Route::prefix('ppid')->group(function () {
        Route::resource('kelolainformasi', PpidController::class);
        Route::get('kelolatampilan', [PpidController::class, 'tampilan']);
    });

    Route::get('/irban', [IrbanController::class, 'irban']);
    Route::prefix('irban')->group(function () {
        Route::get('{irban}', [IrbanController::class, 'index']);
        Route::get('{irban}/agenda', [IrbanController::class, 'agenda']);
        Route::get('{irban}/capaiankinerja', [IrbanController::class, 'capaiankinerja']);
    });

    Route::get('laporan', [LaporanController::class, 'index']);
    Route::prefix('laporan')->group(function () {
        Route::get('ppid', [LaporanController::class, 'ppid']);
        Route::get('saberpungli', [LaporanController::class, 'saberpungli']);
    });
});


Route::get('/admin/menu', function () {
    return view('admin.menu.index');
});

Route::get('/admin/irban1/capaiankinerja', function () {

});
Route::get('/admin/irban1/agenda/tambah', function () {
    return view('admin.irban.irban1.createagenda');
});
Route::get('/admin/irban1/capaiankinerja/create', function () {
    return view('admin.irban.irban1.createcapaian');
});


Route::get('/admin/menu/tambah', function () {
    return view('admin.menu.create');
});