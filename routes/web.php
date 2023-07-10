<?php

use App\Http\Controllers\CookieController;
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
Route::get('/aboutus', function () {
    return view('Footer/aboutus');
});
Route::get('/contactus',function(){
    return view(('footer/Contactus'));
});

Route::get('/privacypolicy',function(){
    return view('footer/policy');
});

Route::get('/termsandconditions',function(){
    return view('footer/conditions');
});

Route::get('/faq',function(){
    return view('footer/faq');
});
Route::get('/feedback',function(){
    return view('footer/feedback');
});

Route::get('/subscription-plans',function(){
    return view('footer/subscriptions');
});

Route::get('/home', function(){
    return view('home/home');
});

Route::get('/video',function(){
    return view('Videoplayer/videoplayer');
});

Route::get('/cookies',function(){
    return view('Cookies/cookies-form');
});

Route::get('/cookie/set', [CookieController::class, 'setCookie']);
Route::get('/cookie/get',[CookieController::class,'getCookie']);

Route::get('session/set',[CookieController::class,'Session_set']);
Route::get('session/get',[CookieController::class,'Session_get']);

Route::get('Videotv',function(){
    return view('TvShows/TvShows');
});

Route::get('usertab', function () {
    return view('UserTab/userTab');
});
Route::get('navbar',function(){
    return view('Cookies/navbar');
});
Route::get('apitsting',[CookieController::class, 'apitesting']);

Route::get('watchlater',function(){
    return view('WatchLater/watchlater');
});