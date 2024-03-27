<?php

use App\Http\Controllers\AplikasiController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use \App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\PenggunaanController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SKBMController;
use App\Http\Controllers\SKDController;
use App\Http\Controllers\SKKController;
use App\Http\Controllers\SKUController;
use App\Http\Controllers\UserMasyarakatController;

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
    return view('home');
});

Route::get('/setting-admin', [SettingController::class, 'admin'])->name('setting-admin');
Route::get('/setting-front', [SettingController::class, 'front'])->name('setting-front');
Route::get('/setting-verifikator', [SettingController::class, 'verifikator'])->name('setting-verifikator');
Route::get('/setting-lurah', [SettingController::class, 'lurah'])->name('setting-lurah');
Route::get('/setting-pemohon', [SettingController::class, 'pemohon'])->name('setting-pemohon');

//
Route::get('/daftar', [RegisterController::class, 'index'])->name('register');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/awal', function () {
    return view('awal');
});

//Dashboard User
Route::get('/dashboard-admin', [DashboardController::class, 'admin'])->name('dashboard-admin');
Route::get('/dashboard-front', [DashboardController::class, 'front'])->name('dashboard-front');
Route::get('/dashboard-verifikator', [DashboardController::class, 'verifikator'])->name('dashboard-verifikator');
Route::get('/dashboard-lurah', [DashboardController::class, 'lurah'])->name('dashboard-lurah');
Route::get('/dashboard-pemohon', [DashboardController::class, 'pemohon'])->name('dashboard-pemohon');
//Admin

Route::Resource('/masyarakat', MasyarakatController::class);
Route::Resource('/kategori', KategoriController::class);
Route::Resource('/aplikasi', AplikasiController::class);
Route::Resource('/petugas', PetugasController::class);
Route::Resource('/persyaratan', PersyaratanController::class);
Route::Resource('/reset', ResetController::class);
Route::Resource('/penggunaan', PenggunaanController::class);

//Front Office
Route::Resource('/user-masyarakat', UserMasyarakatController::class);
Route::get('/dashboard-permohonan', [PermohonanController::class, 'index'])->name('dashboard');
Route::get('/skd', [SKDController::class, 'index'])->name('skd');
Route::get('/sku', [SKUController::class, 'index'])->name('sku');
Route::get('/skbm', [SKBMController::class, 'index'])->name('skbm');
Route::get('/skk', [SKKController::class, 'index'])->name('skk');

//Monitoring
Route::get('/monitoring', [MonitoringController::class, 'front'])->name('monitoring');
Route::get('/monitoringskd', function () {return view('pages.front.monitoring.monitoringskd');})->name('monitoringskd');
Route::get('/monitoringsku', function () {return view('pages.front.monitoring.monitoringsku');})->name('monitoringsku');
Route::get('/monitoringskbm', function () {return view('pages.front.monitoring.monitoringskbm');})->name('monitoringskbm');
Route::get('/monitoringskk', function () {return view('pages.front.monitoring.monitoringskk');})->name('monitoringskk');
//Verifikator

//Pemohon/Masyarakat
/* Route::get('/dashboard', function () {
    return view('pages/pemohon/dashboard');
}); */

Route::get('/skk', function () {
    return view('pages/pemohon/layanan/skk');
});

Route::get('/sku', function () {
    return view('pages/pemohon/layanan/sku');
});

Route::get('/skd', function () {
    return view('pages/pemohon/layanan/skd');
});

Route::get('/skbm', function () {
    return view('pages/pemohon/layanan/skbm');
});
Route::get('/monitoring-pemohon', [MonitoringController::class, 'pemohon'])->name('monitoring-pemohon');

Route::get('/gantipassword', function () {
    return view('pages/pemohon/gantipassword');
});



Route::get('/tentangaplikasi', function () {
    return view('pages/pemohon/tentangaplikasi');
});

Route::get('/permohonanskbm', function () {
    return view('pages/pemohon/surat/permohonanskbm');
});

Route::get('/permohonanskd', function () {
    return view('pages/pemohon/surat/permohonanskd');
});

Route::get('/permohonansku', function () {
    return view('pages/pemohon/surat/permohonansku');
});

Route::get('/permohonanskk', function () {
    return view('pages/pemohon/surat/permohonanskk');
});

Route::get('/menulayanan', function () {
    return view('pages/pemohon/menulayanan');
});


Route::get('/profile', function () {
    return view('pages/pemohon/profile');
});

Route::get('/editprofil', function () {
    return view('pages/pemohon/editprofil');
});
Route::get('/dashboardpemohon', function () {
    return view('pages/pemohon/dashboardpemohon');
});



//Verifikator Lurah

//list surat
Route::get('/listskk', function () {
    return view('pages/verifikator/surat/listskk');
});
Route::get('/listsku', function () {
    return view('pages/verifikator/surat/listsku');
});
Route::get('/listskd', function () {
    return view('pages/verifikator/surat/listskd');
});
Route::get('/listskbm', function () {
    return view('/pages/verifikator/surat/listskbm');
});

//detail surat
Route::get('/detailskk', function () {
    return view('pages/verifikator/detail/detailskk');
});
Route::get('/detailsku', function () {
    return view('pages/verifikator/detail/detailsku');
});
Route::get('/detailskd', function () {
    return view('pages/verifikator/detail/detailskd');
});
Route::get('/detailskbm', function () {
    return view('pages/verifikator/detail/detailskbm');
});

//laporan
Route::get('/laporan', function () {
    return view('pages/verifikator/laporan');
});


//list surat lurah
Route::get('/acc-skk', function () {
    return view('pages/lurah/acc-surat/acc-skk');
});
Route::get('/acc-sku', function () {
    return view('pages/lurah/acc-surat/acc-sku');
});
Route::get('/acc-skd', function () {
    return view('pages/lurah/acc-surat/acc-skd');
});
Route::get('/acc-skbm', function () {
    return view('pages/lurah/acc-surat/acc-skbm');
});


Route::get('/ttdlurah', function () {
    return view('pages/lurah/ttdlurah');
});
