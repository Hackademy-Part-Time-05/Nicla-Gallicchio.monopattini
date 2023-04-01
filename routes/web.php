<?php

use App\Http\Controllers\Monocontroller;
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

Route::get('/',[Monocontroller::class, 'homepage'])->name('homepage');

Route::get('/elenco',[Monocontroller::class, 'list'] )->name('list'); 

Route::get('/dettagli/{id}', [Monocontroller::class, 'detail'] )->name('detail');


