<?php

use App\Models\post;
use App\Http\Controllers\Control;
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
    return view('home',[
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view ('about', [
        "title" => "Tentang",
        "nama" => "Andi Surya Alam",
        "email" => "andalam2@gmail.com",
        "image" => "foto.png"
    ]);
});

Route::get('/post', [Control::class, 'index']);
Route::get('post/{slug}', [Control::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard',[
        "title" => "Admin"
    ]);
});

Route::get('/create', function () {
    return view('create',[
        "title" => "Artikel Baru"
    ]);
});