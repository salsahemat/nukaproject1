<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;
use App\Http\Controllers\ProductController;

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
Route::get('/product', [ProductController::class, 'product']); //ketika routing jalan, dia akan memanggil controller ini dan memamnggil function ini ( function seperti function biasa )
//kurung kotak pertama isi nama controller pertama, :: untuk memamnggil sebuah model, parameter kedua function yg kita panggil
Route::get('/writer/{id}', [ProductController::class, 'show']);

Route::get('/about', function () {
    return view('about', [
        'pagetitle' => 'About Us',
        'maintitle' => 'WHAT IS OHMLY BARN?'
    ]);
});

Route::get('/', function () {
    return view('home', [
        'pagetitle' => 'Home',
        'maintitle' => '100% Natural'
    ]);
});


