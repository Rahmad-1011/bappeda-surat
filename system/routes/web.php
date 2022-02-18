<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'home']);
Route::get('tentang', [HomeController::class, 'tentang']);
Route::get('kontak', [HomeController::class, 'kontak']);

Route::get('Alumni/login', [AuthController::class, 'LoginAlumni']);
Route::post('Alumni/login', [AuthController::class, 'LoginProcessAlumni']);
Route::get('Alumni/logout', [AuthController::class, 'Logout']);

Route::get('Admin/login', [AuthController::class, 'LoginAdmin']);
Route::post('Admin/login', [AuthController::class, 'ProsesLoginAdmin']);
Route::get('Admin/logout', [AuthController::class, 'Logout']);
Route::get('Admin/daftar-admin', [AdminController::class, 'create']);
Route::post('Admin/daftar-admin', [AdminController::class, 'store']);

	Route::prefix('Admin')->group(function(){
			Route::get('beranda', [AdminController::class, 'index']);

			Route::get('surat-masuk', [SuratMasukController::class, 'index']);
			Route::post('surat-masuk/simpan', [SuratMasukController::class, 'store']);
			Route::get('surat-masuk/{is}', [SuratMasukController::class, 'show']);
			Route::get('surat-masuk/edit/{srt_msk}', [SuratMasukController::class, 'edit']);
			Route::put('surat-masuk/simpan/{srt_msk}', [SuratMasukController::class, 'update']);
			Route::delete('surat-masuk/{srt_msk}', [SuratMasukController::class, 'destroy']);

			Route::get('surat-keluar', [SuratKeluarController::class, 'index']);
			Route::post('surat-keluar/simpan', [SuratKeluarController::class, 'store']);
			Route::get('surat-keluar/{is}', [SuratKeluarController::class, 'show']);
			Route::get('surat-keluar/edit/{srt_klr}', [SuratKeluarController::class, 'edit']);
			Route::put('surat-keluar/simpan/{srt_klr}', [SuratKeluarController::class, 'update']);
			Route::delete('surat-keluar/{srt_klr}', [SuratKeluarController::class, 'destroy']);

			//Route::get('komentar', [KomentarController::class, 'Index']);
			//Route::get('komentar/{produk}', [KomentarController::class, 'BalasKomentar']);
			//Route::post('komentar/{produk}', [KomentarController::class, 'PostKomentar']);
			//Route::get('profile', [TokoController::class, 'Profile']);
			//Route::post('profile', [TokoController::class, 'Update']);
			//Route::get('ganti-password', [TokoController::class, 'GantiPassword']);
			//Route::post('ganti-password', [TokoController::class, 'Store']);
	});
