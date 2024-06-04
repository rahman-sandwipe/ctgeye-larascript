<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Frontends\HomeController;

Route::get('/',                                         [HomeController::class, 'home'])
                                                        ->name('home');
                                                        
Route::get('/category/news/{Category:slug}',            [HomeController::class, 'category'])
                                                        ->name('category');

Route::get('/sub/category/news/{Subcategory:slug}',     [HomeController::class, 'subcategory'])
                                                        ->name('subcategory');

//json data multiple dependency
Route::get('get/subcategory', [HomeController::class, 'GetCategory']);

require __DIR__.'/auth.php';