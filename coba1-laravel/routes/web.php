<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('landingpage', [
        "title" => "Peduli Diri | Login"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Peduli Diri | Home"
    ]);
});

Route::get('/catatan', function () {
    return view('catatan', [
        "title" => "Peduli Diri | catatan",
        "name" => "Ilham Permana",
        "email" => "ilhampermana0110@gmail.com",
    ]);
});

Route::get('/isi', function () {
    return view('isi', [
        "title" => "Peduli Diri | Isi Data Diri"
    ]);
});


Route::get('/logout', function () {
    return view('logout', [
        "title" => "Log Out"
    ]);
});


Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/catatan', [CatatanController::class, 'catatan'])->name('catatan');

 