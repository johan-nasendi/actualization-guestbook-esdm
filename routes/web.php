<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestBookController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing');
});

Auth::routes([
    'register' => false,
    'home' => false
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/kirim', [GuestBookController::class, 'store'])->name('guest.store');

Route::group(['prefix' => 'dasbor','middleware' => ['web','auth']] , function() {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/buku-tamu', [GuestBookController::class, 'index'])->name('guest.index');
    Route::get('/buku-tamu/{guest}/edit', [GuestBookController::class, 'index'])->name('guest.edit');
    Route::get('/buku-tamu/{guest}/show', [GuestBookController::class, 'index'])->name('guest.show');
    Route::delete('/buku-tamu/{guest}', [GuestBookController::class, 'index'])->name('guest.delete');




});
