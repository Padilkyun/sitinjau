<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Utama;
use App\Http\Controllers\PostController;
use App\Http\Controllers\pengalaman;
use App\Http\Controllers\NewsController;

use App\Http\Controllers\StoreDaftarController;
use App\Http\Controllers\FollowController;

// Routes for following and unfollowing

Route::post('/caleg/{id}', [FollowController::class, 'follow'])->name('follow');
Route::post('/caleg/{id}/unfollow', [FollowController::class, 'unfollow'])->name('unfollow');

Route::get('/user/{id}/edit', [PostController::class, 'showEditForm'])->name('user.edit');
Route::put('/user/{id}', [PostController::class, 'edit'])->name('user.update');
Route::post('/store', [PostController::class, 'store'])->name('store');
Route::post('/login',[PostController::class, 'login']);

Route::post('/storeexp', [pengalaman::class, 'storeexp'])->name('storeexp');
Route::post('/storedu', [pengalaman::class, 'storedu'])->name('storedu');



// Display the registration form
Route::post('/daftar', [StoreDaftarController::class, 'store'])->name('daftar');
Route::get('/', function () {
    return view('login')    ;
});
Route::get('/daftar',[PostController::class, 'daftar']);
Route::put('/user/{id}', [PostController::class, 'edit'])->name('user.update');

Route::get('/api/followed-users',[FollowController::class, 'getFollowedUsers']);

Route::middleware('auth')->group(function () {
    Route::get('/user/{id}/edit', [PostController::class, 'showEditForm'])->name('user.edit');
    Route::get('/caleg/followed-users', [FollowController::class, 'getFollowedUsers'])->name('caleg.followed-users');
    Route::get('/dashboard', [Utama::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [Utama::class, 'profile'])->name('profile');
    Route::get('/caleg', [Utama::class, 'caleg'])->name('caleg');
    Route::get('/caleg/followed-users', [FollowController::class, 'getFollowedUsers'])->name('caleg.followed-users');
Route::get('/dashboard', [Utama::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [Utama::class, 'profile'])->name('profile');
Route::get('/caleg', [Utama::class, 'caleg'])->name('caleg');
Route::get('/help', [Utama::class, 'help'])->name('help');
Route::post('/logout', [Utama::class, 'logout'])->name('logout');

});

