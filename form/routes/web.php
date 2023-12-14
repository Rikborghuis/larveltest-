<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginRegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('Home');
});

Route::get('/form/new', function () {
    return view('form.NewFormPost');
})->name('newFormPost');
//form routes
Route::get("NewFormPost", [Postcontroller::class, 'index'])->name('newFormPost');
Route::get("store-form", [Postcontroller::class, 'store'])->name('store-form');
Route::get('/',[PostController::class, 'index']);
Route::get('/dashboard', [PostController::class, 'dashboard'])->name('dashboard');


//login/register routes
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');

    //auth
Route::middleware(['auth'])->group(function () {
    Route::get('/form/new', function () {
        return view('form.NewFormPost');
    })->name('newFormPost');
});



});

