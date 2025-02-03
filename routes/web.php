<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\getProducts;
use App\Http\Controllers\aboutController;
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

// Route::get('/', function () {
//     return view('home/homepage');
// });

// Route::get('/page',[HomeController::class,'showpage']);
Route::get('/',[HomeController::class,'showpage']);

Route::get('/product',[getProducts::class,'showProducts']);

Route::get('/about', [aboutController::class,'index']);
Route::post('/insertabout', [aboutController::class,'insertabout']);

