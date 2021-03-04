<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Web Routes for Pages
|--------------------------------------------------------------------------
|
*/

Route::get('/',[PageController::class,'welcome']);

Route::get('/products/gurmano', [PageController::class,'gurmano_products']);

Route::get('/products/gurmano/sour', [PageController::class,'gurmano_sour']);

Route::get('/products/gurmano/roasted', [PageController::class,'gurmano_roasted']);

Route::get('/products/gurmano/cheese', [PageController::class,'gurmano_cheese']);

Route::get('/products/other', [PageController::class,'other_products']);

Route::get('/contact', [PageController::class,'contact']);

/*
|--------------------------------------------------------------------------
| Admin Pages
|--------------------------------------------------------------------------
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('admin/products', ProductController::class)->middleware(['auth']);

Route::get('admin/products/edit/{id}', [ProductController::class,'edit'])->name('admin.products.edit')->middleware(['auth']);

Route::patch('admin/products/update/{id}', [ProductController::class,'update'])->name('admin.products.update')->middleware(['auth']);


//Route::resource('admin/pictures', PictureController::class)->except(['create','store', 'delete'])->middleware(['auth']);


/*
|--------------------------------------------------------------------------
| Admin Pages for Pictures
|--------------------------------------------------------------------------
|
*/


Route::get('admin/pictures/create/{id}', [PictureController::class,'create'])->middleware(['auth']);

//Route::get('admin/pictures/edit/{id}', [PictureController::class,'edit'])->middleware(['auth']);

Route::delete('admin/pictures/delete/{id}', [PictureController::class,'destroy'])->name('admin.pictures.delete')->middleware(['auth']);

Route::post('admin/pictures/store', [PictureController::class,'store'])->name('admin.pictures.store')->middleware(['auth']);

Route::patch('admin/pictures/update', [PictureController::class,'update'])->name('admin.pictures.update')->middleware(['auth']);


