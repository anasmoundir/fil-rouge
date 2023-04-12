<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
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
Route::get('/student/login', [StudentAuthController::class, 'showLoginForm']);
Route::post('/student/login', [StudentAuthController::class, 'login']);
Route::get('/student/register', [StudentAuthController::class, ' ']);
Route::post('/student/register', [StudentAuthController::class, 'register']);

Route::get('/instructor/login', [InstructorAuthController::class, 'showLoginForm']);
Route::post('/instructor/login', [InstructorAuthController::class, 'login']);
Route::get('/instructor/register', [InstructorAuthController::class, 'showRegistrationForm']);
Route::post('/instructor/register', [InstructorAuthController::class, 'register']);

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm']);
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/register', [AdminAuthController::class, 'showRegistrationForm']);
Route::post('/admin/register', [AdminAuthController::class, 'register']);



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
    Route::resource('courses', CourseController::class);
    Route::resource('lessons', LessonController::class);    
    Route::resource('categories', CategoryController::class);
    Route::get('/admin', function () { 
    return view('admin.index'); })->name('admin');    
   });


Route :: get ( '/dashboard' , [ DashboardController :: class , 'index' ]) -> name ( 'dashboard' )->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';
