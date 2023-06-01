<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\Category2Controller;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\WorkController;
use App\Http\Controllers\backend\PriceController;
use App\Http\Controllers\backend\AboutusController;
use App\Http\Controllers\HomeController;
Auth::routes();

// Route::get('/home', [App\Http\Controllers\backend\HomeController::class, 'index'])->name('home');

// Route::get('/', [HomeController::class,'index']);

//  Route::get('/index', function () {
//      return view('website.index');

// })->name('website');



Route::get('/',[HomeController::class,'index'])->name('website.index');;


Route::get('/about', function () {
    return view('website.about');
});
Route::get('/category', function () {
    return view('website.category');
});
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/post', function () {
    return view('website.post');
});


Route::get('layouts/master', [BackendController::class,'index'])->name('layouts.master');





Route::get('auth/modules/category/index', [Category2Controller::class,'index'])->name('auth.modules.category.index');
Route::get('auth/modules/category/create', [Category2Controller::class,'create'])->name('auth.modules.category.create');
Route::post('auth/modules/category/store', [Category2Controller::class,'store'])->name('auth.modules.category.store');
Route::get('auth/modules/category/edit/{id}', [Category2Controller::class,'edit'])->name('auth.modules.category.edit');
Route::post('auth/modules/category/update/{id}', [Category2Controller::class,'update'])->name('auth.modules.category.update');
Route::get('auth/modules/category/delete/{id}', [Category2Controller::class,'destroy'])->name('auth.modules.category.delete');


Route::get('auth/modules/About/index', [AboutController::class,'index'])->name('auth.modules.About.index');
Route::get('auth/modules/About/create', [AboutController::class,'create'])->name('auth.modules.About.create');
Route::post('auth/modules/About/store', [AboutController::class,'store'])->name('auth.modules.About.store');
Route::get('auth/modules/About/edit/{id}', [AboutController::class,'edit'])->name('auth.modules.About.edit');
Route::post('auth/modules/About/update/{id}', [AboutController::class,'update'])->name('auth.modules.About.update');
Route::get('auth/modules/About/delete/{id}', [AboutController::class,'destroy'])->name('auth.modules.About.delete');


Route::get('auth/modules/MyWork/index', [WorkController::class,'index'])->name('auth.modules.MyWork.index');
Route::get('auth/modules/MyWork/create', [WorkController::class,'create'])->name('auth.modules.MyWork.create');
Route::post('auth/modules/MyWork/store', [WorkController::class,'store'])->name('auth.modules.MyWork.store');
Route::get('auth/modules/MyWork/edit/{id}', [WorkController::class,'edit'])->name('auth.modules.MyWork.edit');
Route::post('auth/modules/MyWork/update/{id}', [WorkController::class,'update'])->name('auth.modules.MyWork.update');
Route::get('auth/modules/MyWork/delete/{id}', [WorkController::class,'destroy'])->name('auth.modules.MyWork.delete');


Route::get('auth/modules/Price/index', [PriceController::class,'index'])->name('auth.modules.Price.index');
Route::get('auth/modules/Price/create', [PriceController::class,'create'])->name('auth.modules.Price.create');
Route::post('auth/modules/Price/store', [PriceController::class,'store'])->name('auth.modules.Price.store');
Route::get('auth/modules/Price/edit/{id}', [PriceController::class,'edit'])->name('auth.modules.Price.edit');
Route::post('auth/modules/Price/update/{id}', [PriceController::class,'update'])->name('auth.modules.Price.update');
Route::get('auth/modules/Price/delete/{id}', [PriceController::class,'destroy'])->name('auth.modules.Price.delete');

Route::get('auth/modules/about_us/index', [AboutusController::class,'index'])->name('auth.modules.about_us.index');
Route::get('auth/modules/about_us/create', [AboutusController::class,'create'])->name('auth.modules.about_us.create');
Route::post('auth/modules/about_us/store', [AboutusController::class,'store'])->name('auth.modules.about_us.store');
Route::get('auth/modules/about_us/edit/{id}', [AboutusController::class,'edit'])->name('auth.modules.about_us.edit');
Route::post('auth/modules/about_us/update/{id}', [AboutusController::class,'update'])->name('auth.modules.about_us.update');
Route::get('auth/modules/about_us/delete/{id}', [AboutusController::class,'destroy'])->name('auth.modules.about_us.delete');
