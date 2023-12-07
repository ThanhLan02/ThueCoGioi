<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\TrangchuController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\HangController;
use App\Http\Controllers\Backend\LoaiController;
use App\Http\Controllers\Backend\KhuyenMaiController;
use App\Http\Controllers\Backend\TaixeController;
use App\Http\Controllers\Backend\ThietBiController;
use App\Http\Controllers\Backend\Dangkycontroller;
use App\Http\Controllers\Backend\HosoController;
use App\Http\Controllers\Backend\ThietbiUserController;
use App\Http\Controllers\Backend\ThueController;
use App\Http\Middleware\AuthenticateMiddleware;
use Illuminate\Support\Facades\Response;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [TrangchuController::class, 'index'])->name('Trangchu.index');

Route::get('index', [TrangchuController::class, 'index'])->name('Trangchu.index');
Route::get('thietbitaixe', [TrangchuController::class, 'thietbitaixe'])->name('Trangchu.thietbitaixe');
Route::get('{id}/chitietthietbi', [TrangchuController::class, 'chitietthietbi'])->where(['id' => '[0-9]+'])->name
('Trangchu.chitietthietbi');
Route::get('{id}/chitiettaixe', [TrangchuController::class, 'chitiettaixe'])->where(['id' => '[0-9]+'])->name
('Trangchu.chitiettaixe');
Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.index')->middleware(AuthenticateMiddleware::class);
Route::get('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('dologin', [AuthController::class, 'dologin'])->name('auth.dologin');
Route::get('Dangky', [Dangkycontroller::class, 'Dangky'])->name('Dangky.Dangky');
Route::post('DangkySubmit', [Dangkycontroller::class, 'DangkySubmit'])->name('Dangky.DangkySubmit');
Route::get('hoso/{id}', [HosoController::class, 'hoso'])->where(['id' => '[0-9]+'])->name
('Hoso.hoso');

Route::get('thietbiuser', [ThietbiUserController::class, 'index'])->name('thietbiuser.thietbiuser')->middleware(AuthenticateMiddleware::class);
Route::get('thietbiusercreate', [ThietbiUserController::class, 'thietbiusercreate'])->name('thietbiuser.thietbiusercreate')->middleware(AuthenticateMiddleware::class);
Route::post('thietbiuserstore', [ThietbiUserController::class, 'thietbiuserstore'])->name('thietbiuser.thietbiuserstore')->middleware(AuthenticateMiddleware::class);
Route::get('{id}/updatethietbiuser', [ThietbiUserController::class, 'updatethietbiuser'])->where(['id' => '[0-9]+'])->name
('thietbiuser.updatethietbiuser')->middleware(AuthenticateMiddleware::class);
Route::post('{id}/updatetbu', [ThietbiUserController::class, 'updatetbu'])->where(['id' => '[0-9]+'])->name
('thietbiuser.updatetbu')->middleware(AuthenticateMiddleware::class);

Route::get('{id}/deletethietbiuser', [ThietbiUserController::class, 'deletethietbiuser'])->where(['id' => '[0-9]+'])->name
('thietbiuser.deletethietbiuser')->middleware(AuthenticateMiddleware::class);



//THUÊ
Route::get('giohang', [ThueController::class, 'giohang'])->name
('giohang')->middleware(AuthenticateMiddleware::class);
Route::post('/thuethietbi', [ThueController::class, 'themgiothietbi'])->name
('thuethietbi.themgiohang')->middleware(AuthenticateMiddleware::class);
Route::post('/thuetaixe', [ThueController::class, 'themgiotaixe'])->name
('thuethietbi.themgiohangtx')->middleware(AuthenticateMiddleware::class);
    
 


/*USER */
// Route::group(['prefix' => 'admin'], function(){
//     Route::get('users', [UsersController::class, 'index'])->name('admin.users')->middleware(AuthenticateMiddleware::class);
//     Route::get('create', [UsersController::class, 'create'])->name('admin.create')->middleware(AuthenticateMiddleware::class);
//     //Route::post('store', [UsersController::class, 'store'])->name('admin.store')->middleware(AuthenticateMiddleware::class);
    
// });

Route::get('users', [UsersController::class, 'index'])->name('admin.users')->middleware(AuthenticateMiddleware::class);
Route::get('usercreate', [UsersController::class, 'create'])->name('admin.create')->middleware(AuthenticateMiddleware::class);
Route::post('store', [UsersController::class, 'store'])->name('admin.store')->middleware(AuthenticateMiddleware::class);
Route::get('{id}/updateuser', [UsersController::class, 'updateuser'])->where(['id' => '[0-9]+'])->name
('admin.updateuser')->middleware(AuthenticateMiddleware::class);
Route::post('{id}/update', [UsersController::class, 'update'])->where(['id' => '[0-9]+'])->name
('admin.update')->middleware(AuthenticateMiddleware::class);

Route::get('{id}/deleteuser', [UsersController::class, 'deleteuser'])->where(['id' => '[0-9]+'])->name
('admin.deleteuser')->middleware(AuthenticateMiddleware::class);

/*HÃNG THIẾT BỊ */
Route::get('hang', [HangController::class, 'index'])->name('admin.hang')->middleware(AuthenticateMiddleware::class);
Route::get('hangcreate', [HangController::class, 'hangcreate'])->name('admin.hangcreate')->middleware(AuthenticateMiddleware::class);
Route::post('hangstore', [HangController::class, 'hangstore'])->name('admin.hangstore')->middleware(AuthenticateMiddleware::class);
Route::get('{id}/updatehang', [HangController::class, 'updatehang'])->where(['id' => '[0-9]+'])->name
('admin.updatehang')->middleware(AuthenticateMiddleware::class);
Route::post('{id}/updateh', [HangController::class, 'updateh'])->where(['id' => '[0-9]+'])->name
('admin.updateh')->middleware(AuthenticateMiddleware::class);

Route::get('{id}/deletehang', [HangController::class, 'deletehang'])->where(['id' => '[0-9]+'])->name
('admin.deletehang')->middleware(AuthenticateMiddleware::class);


/*LOẠI THIẾT BỊ */
Route::get('loai', [LoaiController::class, 'index'])->name('admin.loai')->middleware(AuthenticateMiddleware::class);
Route::get('loaicreate', [LoaiController::class, 'loaicreate'])->name('admin.loaicreate')->middleware(AuthenticateMiddleware::class);
Route::post('loaistore', [LoaiController::class, 'loaistore'])->name('admin.loaistore')->middleware(AuthenticateMiddleware::class);
Route::get('{id}/updateloai', [LoaiController::class, 'updateloai'])->where(['id' => '[0-9]+'])->name
('admin.updateloai')->middleware(AuthenticateMiddleware::class);
Route::post('{id}/updatel', [LoaiController::class, 'updatel'])->where(['id' => '[0-9]+'])->name
('admin.updatel')->middleware(AuthenticateMiddleware::class);

Route::get('{id}/deleteloai', [LoaiController::class, 'deleteloai'])->where(['id' => '[0-9]+'])->name
('admin.deleteloai')->middleware(AuthenticateMiddleware::class);

/*KHUYẾN MÃi THIẾT BỊ */
Route::get('khuyenmai', [KhuyenMaiController::class, 'index'])->name('admin.khuyenmai')->middleware(AuthenticateMiddleware::class);
Route::get('khuyenmaicreate', [KhuyenMaiController::class, 'khuyenmaicreate'])->name('admin.khuyenmaicreate')->middleware(AuthenticateMiddleware::class);
Route::post('khuyenmaistore', [KhuyenMaiController::class, 'khuyenmaistore'])->name('admin.khuyenmaistore')->middleware(AuthenticateMiddleware::class);
Route::get('{id}/updatekhuyenmai', [KhuyenMaiController::class, 'updatekhuyenmai'])->where(['id' => '[0-9]+'])->name
('admin.updatekhuyenmai')->middleware(AuthenticateMiddleware::class);
Route::post('{id}/updatekm', [KhuyenMaiController::class, 'updatekm'])->where(['id' => '[0-9]+'])->name
('admin.updatekm')->middleware(AuthenticateMiddleware::class);

Route::get('{id}/deletekhuyenmai', [KhuyenMaiController::class, 'deletekhuyenmai'])->where(['id' => '[0-9]+'])->name
('admin.deletekhuyenmai')->middleware(AuthenticateMiddleware::class);

/*TÀI XẾ */
Route::get('taixe', [TaixeController::class, 'index'])->name('admin.taixe')->middleware(AuthenticateMiddleware::class);
Route::get('taixecreate', [TaixeController::class, 'taixecreate'])->name('admin.taixecreate')->middleware(AuthenticateMiddleware::class);
Route::post('taixestore', [TaixeController::class, 'taixestore'])->name('admin.taixestore')->middleware(AuthenticateMiddleware::class);
Route::get('{id}/updatetaixe', [TaixeController::class, 'updatetaixe'])->where(['id' => '[0-9]+'])->name
('admin.updatetaixe')->middleware(AuthenticateMiddleware::class);
Route::post('{id}/updatetx', [TaixeController::class, 'updatetx'])->where(['id' => '[0-9]+'])->name
('admin.updatetx')->middleware(AuthenticateMiddleware::class);

Route::get('{id}/deletetaixe', [TaixeController::class, 'deletetaixe'])->where(['id' => '[0-9]+'])->name
('admin.deletetaixe')->middleware(AuthenticateMiddleware::class);

/*THIẾT BỊ */
Route::get('thietbi', [ThietBiController::class, 'index'])->name('admin.thietbi')->middleware(AuthenticateMiddleware::class);
Route::get('thietbicreate', [ThietBiController::class, 'thietbicreate'])->name('admin.thietbicreate')->middleware(AuthenticateMiddleware::class);
Route::post('thietbistore', [ThietBiController::class, 'thietbistore'])->name('admin.thietbistore')->middleware(AuthenticateMiddleware::class);
Route::get('{id}/updatethietbi', [ThietBiController::class, 'updatethietbi'])->where(['id' => '[0-9]+'])->name
('admin.updatethietbi')->middleware(AuthenticateMiddleware::class);
Route::post('{id}/updatetb', [ThietBiController::class, 'updatetb'])->where(['id' => '[0-9]+'])->name
('admin.updatetb')->middleware(AuthenticateMiddleware::class);

Route::get('{id}/deletethietbi', [ThietBiController::class, 'deletethietbi'])->where(['id' => '[0-9]+'])->name
('admin.deletethietbi')->middleware(AuthenticateMiddleware::class);