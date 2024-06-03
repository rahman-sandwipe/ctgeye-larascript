<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Backends\NewsController;
use App\Http\Controllers\Backends\VideosController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Backends\CategoryController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Backends\SubcategoryController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    // User mangments
    Route::get('/',         [AdminController::class, 'admin'])->name('admin');
    Route::get('/authors',  [AdminController::class, 'authors'])->name('authors');
    Route::get('/teams',    [AdminController::class, 'teams'])->name('teams');
    Route::get('/teachers', [AdminController::class, 'teachers'])->name('teachers');
    Route::get('/users',    [AdminController::class, 'users'])->name('users');
    Route::get('/user-list',[AdminController::class, 'usersList'])->name('usersList');
    Route::get('register',  [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    // User mangments ends
    
    /* --------------------------------------------------------------------------*/
    // Category Route
    Route::get('/category',                 [CategoryController::class, 'index'])->name('category');
    Route::get('/create/category',          [CategoryController::class, 'create'])->name('create.category');
    Route::post('/create/category',         [CategoryController::class, 'store']);
    Route::get('/edit/category/{id}',       [CategoryController::class, 'edit'])->name('edit.category');
    Route::post('/edit/category/{id}',      [CategoryController::class, 'update']);
    Route::get('/delete/category/{id}',     [CategoryController::class, 'delete'])->name('delete.category');
    Route::get('/status/category/{id}',     [CategoryController::class, 'status'])->name('status.category');
    // Sub Category Route
    Route::get('/sub/category',             [SubcategoryController::class, 'index'])->name('subcategory');
    Route::get('/create/sub/category',      [SubcategoryController::class, 'create'])->name('create.subcategory');
    Route::post('/create/sub/category',     [SubcategoryController::class, 'store']);
    Route::get('/edit/sub/category/{id}',   [SubcategoryController::class, 'edit'])->name('edit.subcategory');
    Route::post('/edit/sub/category/{id}',  [SubcategoryController::class, 'update']);
    Route::get('/delete/sub/category/{id}', [SubcategoryController::class, 'delete'])->name('delete.subcategory');
    Route::get('/status/sub/category/{id}', [SubcategoryController::class, 'status'])->name('status.subcategory');
    // News Route
    Route::get('/news',                     [NewsController::class, 'index'])->name('news');
    Route::get('/create/news',              [NewsController::class, 'create'])->name('create.news');
    Route::post('/create/news',             [NewsController::class, 'store']);
    Route::get('/edit/news/{id}',           [NewsController::class, 'edit'])->name('edit.news');
    Route::post('/edit/news/{id}',          [NewsController::class, 'update']);
    Route::get('/delete/news/{id}',         [NewsController::class, 'delete'])->name('delete.news');
    Route::get('/status/news/{id}',         [NewsController::class, 'status'])->name('status.news');
    // Videos Route
    Route::get('/videos',                   [VideosController::class, 'index'])->name('videos');
    Route::get('/create/video',             [VideosController::class, 'create'])->name('create.video');
    Route::post('/create/video',            [VideosController::class, 'store']);
    Route::get('/edit/video/{id}',          [VideosController::class, 'edit'])->name('edit.video');
    Route::post('/edit/video/{id}',         [VideosController::class, 'update']);
    Route::get('/delete/video/{id}',        [VideosController::class, 'delete'])->name('delete.video');
    Route::get('/status/video/{id}',        [VideosController::class, 'status'])->name('status.video');
    
    
    // User Mangments
    /* --------------------------------------------------------------------------*/

    // Authentication
    
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

Route::group(['prefix'=>'user','middleware'=>'auth'],function(){
    // User mangments
    Route::get('/',         [AdminController::class, 'admin'])->name('user');



    // Authentication
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});