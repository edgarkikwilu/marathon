<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RequestController;
use App\Http\Controllers\DashboardController;

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
    return view('index');
})->name('home');

Route::post('submit',[RequestController::class,'store'])->name('submit');

Route::get('dashboard',[DashboardController::class,'loadData'])->name('dashboard.load')->middleware('auth');

// Route::

Auth::routes(['register'=>false]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
