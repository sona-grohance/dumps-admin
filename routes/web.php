<?php

use App\Livewire\Exam;
use App\Livewire\Home;
use App\Livewire\Proxy;
use App\Livewire\ProxyCategory;
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

Route::get('/',Home::class);
Route::get('/exam/{type}/{slug}',Exam::class)->name('exam');
Route::get('/proxy',Proxy::class);
Route::get('/proxy/{slug}',ProxyCategory::class)->name('proxy');


