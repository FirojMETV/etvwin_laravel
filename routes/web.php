<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtvWin;

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
Route::get('/login', [EtvWin::class, 'login'])->middleware('alreadLoggedIn');
Route::get('/registration', [EtvWin::class, 'registration'])->middleware('alreadLoggedIn');
Route::post('/register-user', [EtvWin::class, 'registerUser'])->name('register-user');
Route::post('login-user', [EtvWin::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [EtvWin::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [EtvWin::class, 'logout']);

Route::get('/footer', function () {
    return view('Footer/footer');
});
