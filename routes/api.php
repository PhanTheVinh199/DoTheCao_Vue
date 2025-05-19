<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApiMTC_NhaCungCapController;
use App\Http\Controllers\api\ApiDTC_NhaCungCapController;
use App\Http\Controllers\api\ApiMatheCaoController;
use App\Http\Controllers\api\ApiDoitheCaoController;
use App\Http\Controllers\api\ApiThanhVienController;
use App\Http\Controllers\api\ApiNapTienController;
use App\Http\Controllers\api\ApiRutTienController;
use App\Http\Controllers\api\ApiNganHangAdminController;
use App\Http\Controllers\api\ApiNganHangUserController;
use App\Http\Controllers\api\ApiDonMuaTheController;
use App\Http\Controllers\api\ApiDonDoiTheController;


Route::get('/mtc_nhacungcao', [ApiMTC_NhaCungCapController::class, 'index']);
Route::get('/dtc_nhacungcao', [ApiDTC_NhaCungCapController::class, 'index']);
Route::get('/mathecao', [ApiMatheCaoController::class, 'index']);
Route::get('/doithecao', [ApiDoitheCaoController::class, 'index']);
Route::get('/thanhvien', [ApiThanhVienController::class, 'index']);
Route::get('/naptien', [ApiNapTienController::class, 'index']);
Route::get('/ruttien', [ApiRutTienController::class, 'index']);
Route::get('/nganhangadmin', [ApiNganHangAdminController::class, 'index']);
Route::get('/nganhanguser', [ApiNganHangUserController::class, 'index']);
Route::get('/donmuathe', [ApiDonMuaTheController::class, 'index']);
Route::get('/dondoithe', [ApiDonDoiTheController::class, 'index']);
Route::get('/mathecao', [ApiMatheCaoController::class, 'index']);
