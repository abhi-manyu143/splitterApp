<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::get('addgroup', [\App\Http\Controllers\GroupController::class, 'addgroup'])->name('addgroup');
    Route::post('savegroup', [\App\Http\Controllers\GroupController::class, 'savegroup'])->name('savegroup');
    Route::get('friends/{id}', [\App\Http\Controllers\FriendsController::class, 'friendsControl'])->name('friends');
    // Route::get('friendform', [\App\Http\Controllers\FriendsController::class, 'friendsAdd'])->name('friendsform');
    Route::post('savefriend/{id}', [\App\Http\Controllers\FriendsController::class, 'friendsave'])->name('savefriend');

    Route::get('expence/{id}', [\App\Http\Controllers\ExpenceController::class, 'ExpenceView']);
    Route::post('saveexpence/{id}', [\App\Http\Controllers\ExpenceController::class, 'ExpenceSave'])->name('saveexpence');
    Route::get('splitterlist/{id}/{tt}', [\App\Http\Controllers\ExpenceController::class, 'ExpenceSplitter'])->name('splitterlist');
});
