<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users', [DashboardController::class, 'users'])->name('users');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');
    Route::get('/admin', function () { 
        return view('admin.index'); })->name('admin');
        Route::get('/categories', 'CategoryController@index')->name('categories.index');
});
Route:: get('/categories', [ CategoryController :: class , 'index' ]) -> name ( 'categories.index' );
Route:: Post('/categories', [ CategoryController :: class , 'store' ]) -> name ( 'categories.store' );
Route:: get('/categories/create', [ CategoryController :: class , 'create' ]) -> name ( 'categories.create' );
Route:: get('/categories/{id}', [ CategoryController :: class , 'show' ]) -> name ( 'categories.show' );
Route:: put('/categories/{id}', [ CategoryController :: class , 'update' ]) -> name ( 'categories.update' );
Route:: delete('/categories/{id}', [ CategoryController :: class , 'destroy' ]) -> name ( 'categories.destroy' );

Route :: get ( '/dashboard' , [ DashboardController :: class , 'index' ]) -> name ( 'dashboard' )->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';
