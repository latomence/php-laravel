<?php

use App\Http\Controllers\GitHubController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserDetailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function () { return view('welcome'); })->name('index');

Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

Route::get('/login', [GitHubController::class, 'login'])->name('auth.login');

Route::get('/register', [GitHubController::class, 'register'])->name('auth.register');
Route::put('/register', [GitHubController::class, 'registration'])->name('auth.registration');

Route::get('/logout', function () { Auth::logout(); return redirect( route('index')); })->name('logout');



Route::get('/auth', [GitHubController::class, 'gitRedirect'])->name('auth.redirect');
Route::get('auth/callback', [GitHubController::class, 'gitCallback']);
Route::resource('users', GitHubController::class);
Route::resource('clients', ClientController::class);





