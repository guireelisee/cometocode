<?php

use App\Http\Controllers\SocieteController;
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
    return view('home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');

Route::group(['namespace' => 'Admin',
            'prefix' => 'admin',
            'middleware' => 'admin'], function() {
    Route::resource('societe', [SocieteController::class]);
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
});
Route::group(['namespace' => 'Societe',
            'prefix' => 'societe',
            'middleware' => 'societe'], function() {
    Route::get('/societe', [App\Http\Controllers\SocieteController::class, 'index'])->name('societe')->middleware('societe');
    Route::resource('societe', [SocieteController::class])->only(
        'index','uptdate','edit'
    );
});
