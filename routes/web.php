<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users\UsersController;

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
    return view('welcome');
});

Auth::routes();

 Auth::Routes(['verify' => true]);

Route::middleware(['admin', 'auth', 'verified'])->group(function(){
Route::get('/users/admin', [UsersController::class, 'index'])->name('admin.index');
Route::get('/users', [UsersController::class, 'user'])->name('users.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});