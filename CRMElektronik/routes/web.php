<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\JenistransaksiController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\RiwayatTransaksiController;
use App\Http\Controllers\SarankritikController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TukarpoinController;
use Database\Factories\PelangganFactory;
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

Route::get('/login', function () {
  return view('auth.login');
});
Route::get('/register', function () {
  return view('auth.register');
});

Route::get('/', [DashboardController::class, 'index']);
Route::resource('/pelanggan', PelangganController::class);
Route::resource('/konsumen', KonsumenController::class);
Route::resource('/distributor', DistributorController::class);
Route::resource('/barang', BarangController::class);

Route::resource('/transaksi', TransaksiController::class);
Route::get('/transaksi/barang/{id}', [transaksiController::class, 'getBarang']);

Route::get('/riwayat_trans_pelanggan', [RiwayatTransaksiController::class, 'transPelanggan']);
Route::get('/riwayat_trans_pelanggan/show', [RiwayatTransaksiController::class, 'showPelanggan']);
Route::get('/riwayat_trans_konsumen', [RiwayatTransaksiController::class, 'transKonsumen']);
Route::get('/riwayat_trans_konsumen/show', [RiwayatTransaksiController::class, 'showKonsumen']);

Route::resource('/jenis_transaksi', JenistransaksiController::class);
Route::resource('/poin', PoinController::class);
Route::resource('/penukaran_poin', TukarpoinController::class);
Route::resource('/saran_kritik', SarankritikController::class);
Route::resource('/admin', AdminController::class);
Route::resource('/user', UserController::class);


// Route::get('/riwayat_trans_konsumen', riwtransKonsumenController::class);
// Route::resource('/riwayat_trans_konsumen', jenisTransaksiController::class);



// Route::get('/barang', [barangController::class, 'index']);
// Route::get('/barang/store', [barangController::class, 'store']);
// Route::post('/barang/update/{id}', [barangController::class, 'update']);
// Route::post('/barang/destroy/{id}', [barangController::class, 'destroy']);

// Route::get('/transaksi', [transaksiController::class, 'index']);
// Route::get('/transaksi/store', [transaksiController::class, 'store']);
// Route::post('/transaksi/update/{id}', [transaksiController::class, 'update']);
// Route::post('/transaksi/destroy/{id}', [transaksiController::class, 'destroy']);

// Route::get('/jenis_transaksi', [JenistransaksiController::class, 'index']);
// Route::get('/jenis_transaksi/store', [JenistransaksiController::class, 'store']);
// Route::post('/jenis_transaksi/update/{id}', [JenistransaksiController::class, 'update']);
// Route::post('/jenis_transaksi/destroy/{id}', [JenistransaksiController::class, 'destroy']);





// Route::resource('/jenis_transaksi/post', [test::class]);
// Route::resource('user', jenisTransaksiController::class);

// Route::get('/riwayat_trans_pelanggan', [riwayatTransPelangganController::class, 'show']);

// Route::get('/riwayat_trans_konsumen', [riwayatTransKonsumenController::class, 'show']);

// Route::get('/poin', [poinController::class, 'show']);

// Route::get('/penukaran_poin', [penukaranPoinController::class, 'show']);

// Route::get('/saran_kritik', [saranKritikController::class, 'show']);

// Route::get('/admin', [adminController::class, 'show']);

// Route::get('/user', [userController::class, 'show']);


// Route::get('/login', function () {
//     return view('login', [
//         "title" => "Login",
//         "navText" => "Login",
//         "navTextItem" => "",
//     ]);
// });



// Route::get('/', function () {
//     return view('dashboard', [
//         "title" => "Dashboard",
//         "navText" => "Dashboard",
//         "navTextItem" => "",
//     ]);
// });


// Route::get('/pelanggan', function () {
//     return view('pelanggan', [
//         "title" => "Pelanggan",
//         "navText" => "Pelanggan",
//         "navTextItem" => "",
//     ]);
// });



// Route::get('/konsumen', function () {
//     return view('konsumen', [
//         "title" => "Konsumen",
//         "navText" => "Konsumen",
//         "navTextItem" => "",
//     ]);
// });


// Route::get('/distributor', function () {
//     return view('distributor', [
//         "title" => "Distributor",
//         "navText" => "Distributor",
//         "navTextItem" => "",
//     ]);
// });


// Route::get('/barang', function () {
//     return view('barang', [
//         "title" => "Barang",
//         "navText" => "Barang",
//         "navTextItem" => "",
//     ]);
// });


// Route::get('/transaksi', function () {
//     return view('transaksi', [
//         "title" => "Transaksi",
//         "navText" => "Transaksi",
//         "navTextItem" => "Transaksi Penjualan",
//     ]);
// });


// Route::get('/jenis_transaksi', function () {
//     return view('jenisTransaksi', [
//         "title" => "Transaksi",
//         "navText" => "Transaksi",
//         "navTextItem" => "Jenis Transaksi",
//     ]);
// });


// Route::get('/riwayat_trans_pelanggan', function () {
//     return view('riwayatTransPelanggan', [
//         "title" => "Riwayat Transaksi",
//         "navText" => "Riwayat Transaksi",
//         "navTextItem" => "Pelanggan",
//     ]);
// });


// Route::get('/riwayat_trans_konsumen', function () {
//     return view('riwayatTransKonsumen', [
//         "title" => "Riwayat Transaksi",
//         "navText" => "Riwayat Transaksi",
//         "navTextItem" => "Konsumen",
//     ]);
// });


// Route::get('/poin', function () {
//     return view('poin', [
//         "title" => "Poin",
//         "navText" => "Poin",
//         "navTextItem" => "Poin",
//     ]);
// });


// Route::get('/penukaran_poin', function () {
//     return view('penukaranPoin', [
//         "title" => "Poin",
//         "navText" => "Poin",
//         "navTextItem" => "Penukaran Poin",
//     ]);
// });


// Route::get('/saran_kritik', function () {
//     return view('saranKritik', [
//         "title" => "Saran Kritik",
//         "navText" => "Saran Kritik",
//         "navTextItem" => "",
//     ]);
// });


// Route::get('/admin', function () {
//     return view('admin', [
//         "title" => "Admin",
//         "navText" => "Pengelola",
//         "navTextItem" => "Admin",
//     ]);
// });


// Route::get('/user', function () {
//     return view('user', [
//         "title" => "User",
//         "navText" => "Pengelola",
//         "navTextItem" => "User",
//     ]);
// });