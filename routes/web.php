<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [PostController::class, 'index']);

Route::get('home/{slug}', [PostController::class, 'show'] );

Route::get('/about', function () {
    return view('about', [
        "name" => "about Page",
        "judul" => "About"
    ]);
});

Route::get('/reporter', function () {
    return view('reporter', [
        "judul" => "Reporter",
        "name" => "Simon Riley",
        "email" => "RileyMon@gmail.com",
        "image" => "422c077fa5ed0dd72023d126a3b11da5.png"
    ]);
});

