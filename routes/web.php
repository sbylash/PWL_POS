<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ManagerController;

Route::get('/', [WelcomeController::class, 'index']);

// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/level/tambah', [LevelController::class, 'tambah']);
// Route::post('/level/tambah_simpan', [LevelController::class, 'tambah_simpan'])->name('level.tambah_simpan');
// Route::get('/level/ubah/{id}', [LevelController::class, 'ubah']);
// Route::put('/level/ubah_simpan/{id}', [LevelController::class, 'ubah_simpan']);
// Route::get('/level/hapus/{id}', [LevelController::class, 'hapus']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.tambah_simpan');
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/kategori/create', [KategoriController::class, 'create']);
// Route::post('/kategori', [KategoriController::class, 'store']);

Route::get('/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');

Route::resource('m_user', POSController::class);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);          // menampilkan halaman awal level user
    Route::post('/list', [LevelController::class, 'list']);      // menampilkan data level user dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']);   // menampilkan halaman form tambah level user
    Route::post('/', [LevelController::class, 'store']);         // menyimpan data level user baru
    Route::get('/{id}', [LevelController::class, 'show']);       // menampilkan detail level user
    Route::get('/{id}/edit', [LevelController::class, 'edit']);  // menampilkan halaman form edit level user
    Route::put('/{id}', [LevelController::class, 'update']);     // menyimpan perubahan data level user
    Route::delete('/{id}', [LevelController::class, 'destroy']); // menghapus data level user
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);          // menampilkan halaman awal kategori barang
    Route::post('/list', [KategoriController::class, 'list']);      // menampilkan data kategori barang dalam bentuk json untuk datatables
    Route::get('/create', [KategoriController::class, 'create']);   // menampilkan halaman form tambah kategori barang
    Route::post('/', [KategoriController::class, 'store']);         // menyimpan data kategori barang baru
    Route::get('/{id}', [KategoriController::class, 'show']);       // menampilkan detail kategori barang
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);  // menampilkan halaman form edit kategori barang
    Route::put('/{id}', [KategoriController::class, 'update']);     // menyimpan perubahan data kategori barang
    Route::delete('/{id}', [KategoriController::class, 'destroy']); // menghapus data kategori barang
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']);          // menampilkan halaman awal data barang
    Route::post('/list', [BarangController::class, 'list']);      // menampilkan data barang dalam bentuk json untuk datatables
    Route::get('/create', [BarangController::class, 'create']);   // menampilkan halaman form tambah barang
    Route::post('/', [BarangController::class, 'store']);         // menyimpan data barang baru
    Route::get('/{id}', [BarangController::class, 'show']);       // menampilkan detail data barang
    Route::get('/{id}/edit', [BarangController::class, 'edit']);  // menampilkan halaman form edit data barang
    Route::put('/{id}', [BarangController::class, 'update']);     // menyimpan perubahan data barang
    Route::delete('/{id}', [BarangController::class, 'destroy']); // menghapus data barang
});

Route::group(['prefix' => 'stok'], function () {
    Route::get('/', [StokController::class, 'index']);          // menampilkan halaman awal stok barang
    Route::post('/list', [StokController::class, 'list']);      // menampilkan data stok barang dalam bentuk json untuk datatables
    Route::get('/create', [StokController::class, 'create']);   // menampilkan halaman form tambah stok barang
    Route::post('/', [StokController::class, 'store']);         // menyimpan data stok barang baru
    Route::get('/{id}', [StokController::class, 'show']);       // menampilkan detail data stok barang
    Route::get('/{id}/edit', [StokController::class, 'edit']);  // menampilkan halaman form edit data stok barang
    Route::put('/{id}', [StokController::class, 'update']);     // menyimpan perubahan data stok barang
    Route::delete('/{id}', [StokController::class, 'destroy']); // menghapus data stok barang
});

Route::group(['prefix' => 'penjualan'], function () {
    Route::get('/', [PenjualanController::class, 'index']);
    Route::post('/list', [PenjualanController::class, 'list']);
    Route::get('/create', [PenjualanController::class, 'create']);
    Route::get('/get-harga/{id}', [PenjualanController::class, 'getHarga']);
    Route::post('/', [PenjualanController::class, 'store']);
    Route::get('/{id}', [PenjualanController::class, 'show']);
    Route::get('/{id}/edit', [PenjualanController::class, 'edit']);
    Route::put('/{id}', [PenjualanController::class, 'update']);
    Route::delete('/{id}', [PenjualanController::class, 'destroy']);
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function(){

    Route::group(['middleware'=>['cek_login:1']],function(){
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware'=>['cek_login:2']],function(){
        Route::resource('manager', ManagerController::class);
    });
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/file-upload', [FileUploadController::class, 'fileUpload']);
Route::post('/file-upload', [FileUploadController::class, 'prosesFileUpload']);