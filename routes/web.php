<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
//Display Index Page
Route::get('/',[ContactController::class,'index']);
Route::get('/create',[ContactController::class,'create']);
Route::post('/store',[ContactController::class,'store']);
Route::get('/edit/{id}',[ContactController::class,'edit'])->name('edit');
Route::patch('/update/{id}',[ContactController::class,'update'])->name('update');
Route::delete('/delete/{id}',[ContactController::class,'destroy'])->name('del');



/*
Route::get('/', function () {
    return view('welcome');
});
*/
