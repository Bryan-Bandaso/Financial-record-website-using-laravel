<?php

<<<<<<< HEAD
use App\Models\Kas;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
<<<<<<< HEAD
use App\Http\Controllers\SearchByDate;
use App\Http\Controllers\UpdateProfileInformationController;
=======
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db

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

<<<<<<< HEAD
Route::get('/', [AuthController::class, 'page'])->name('page');

// Route  login
Route::get('/login', [AuthController::class, 'login'])->name('login');
=======
// Route  login
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
Route::post('/loginuser', [AuthController::class, 'loginuser'])->name('loginuser');

// Route Register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/registeruser', [AuthController::class, 'registeruser'])->name('registeruser');

<<<<<<< HEAD
Route::get('/tentang', [KasController::class, 'aboutUs'])->name('tentang');

Route::middleware(['auth'])->group(function () {
  // Route Home Page
  Route::get('/home', [KasController::class, 'home'])->name('home');
  Route::get('/getDashboard', [KasController::class, 'getDashboard'])->name('getDashboard');

  // Route Edit pass
  Route::get('/update-profile', [UpdateProfileInformationController::class, 'edit'])->name('profile.edit');
  Route::put('/update-profile', [UpdateProfileInformationController::class, 'update'])->name('profile.edit');

  Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

  Route::get('/kas/{buku_id}/', [KasController::class, 'kas'])->name('transaction.kas');
  Route::post('/insertkas/{buku_id}', [KasController::class, 'insertDatakas'])->name('insertkas');
  Route::get('/showkas/{id}', [KasController::class, 'showkas'])->name('showkas');
  Route::get('/export/{buku_id}', [KasController::class, 'export'])->name('export');
  Route::get('/exportfilter/{buku_id}/{awal}/{akhir}', [KasController::class, 'exportfilter'])->name('exportfilter');

  // Route nambah buku kas
  Route::get('/bukukas', [BukuController::class, 'bukukas'])->name('bukukas');
  Route::post('/insert', [BukuController::class, 'insertData'])->name('insert');
  Route::get('/show', [BukuController::class, 'show'])->name('show');
  Route::get('/showData', [BukuController::class, 'showData'])->name('showData');

  Route::get('/delete/{id}/', [KasController::class, 'deletebook'])->name('deletebook');

  Route::get('/date}', [KasController::class, 'searchbydate'])->name('searchbydate');
  Route::get('/tampil-data/{id}', [KasController::class, 'showData'])->name('tampil-data');
=======
// Route HomePage
Route::get('/home', [KasController::class, 'home'])->name('home.home');

// Route Edit Profile (kurang edit post)
Route::get('/profil', [AuthController::class, 'edit'])->name('edit.profile');

// Route tabel kas (kurang delete)
Route::get('/kas', [KasController::class, 'kas'])->name('transaction.kas');
Route::post('/insertkas', [KasController::class, 'insertDatakas'])->name('insertkas');
Route::get('/showkas/{id}', [KasController::class, 'showkas'])->name('showkas');
Route::get('/export', [KasController::class, 'export'])->name('transaction.kas-pdf');

// Route nambah buku kas 
Route::get('/bukukas', [BukuController::class, 'bukukas'])->name('home.home');
Route::post('/insert', [BukuController::class, 'insertData'])->name('insert');
Route::get('/show/{id}', [BukuController::class, 'showData'])->name('show');

Route::middleware(['auth'])->group(function () {
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
});
