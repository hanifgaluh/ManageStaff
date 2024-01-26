<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LeaderController;
use Illuminate\Routing\Route as RoutingRoute;

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
    return view('welcome');
});
Route::get('/laporan/inbox', [LaporanController::class, 'leader'])->name('laporan.inbox')->middleware('auth');

Route::resource('laporan',LaporanController::class)->middleware('auth');
Auth::routes();

Route::resource('leader', LeaderController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
