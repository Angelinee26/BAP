<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\matakuliahController;
use App\Http\Controllers\programstudiController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\jadwalkuliahController;

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
    return view('index');
});
Route::get('/Welcome', function () {
    return view('welcome');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
//     return view('mahasiswa');
// });
Route::get('/matakuliah', [matakuliahController::class, 'index']);
//     return view('profile');
// });
Route::get('/programstudi', [programstudiController::class, 'index']);
//     return view('mahasiswa');
// });
Route::get('/pembayaran', [pembayaranController::class, 'index']);
//     return view('profile');
// });
Route::get('/jadwalkuliah', [jadwalkuliahController::class, 'index']);
//     return view('mahasiswa');
// });
