<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RequestController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

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
Route::get('success',function(){
    return view('success');
})->name('success');
Route::get('dashboard',[DashboardController::class,'loadData'])->name('dashboard.load')->middleware('auth');

Route::get('logout',function(){
    Auth::logout();
    return redirect()->route('home');
});

Auth::routes(['register'=>false,'logout'=>false]);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return route('dashboard.load');
// })->name('dashboard');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
