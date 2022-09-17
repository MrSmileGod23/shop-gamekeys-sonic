<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class,'allData'])->name('all-data');
Route::get('/game/{slug_publisher}/{slug_genre}/{slug_game}',[ProductController::class,'getGame'])->name('getGame');
Route::get('/catalog',[ProductController::class,'getCatalog'])->name('catalog');
Route::get('/catalog/genre/{slug_genre}/{id}',[ProductController::class,'getCatalogGenre'])->name('catalogGenre');
Route::get('/catalog/publisher/{slug_publisher}/{id}',[ProductController::class,'getCatalogPublisher'])->name('catalogPublisher');
Route::get('/preorder',[ProductController::class,'getPreOrder'])->name('preorder');
Route::get('/stocks',[ProductController::class,'getStocks'])->name('stocks');
Route::get('/about', function () {return view('about');})->name('about');

Auth::routes();

Route::get('/profile/{id}',[UserController::class,'user'])->name('user')->middleware('auth');
