<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Backend\CategoryController;
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
Route::prefix('admin')->group(function(){
    Route::get('/login',[ AdminController::class, 'Index'])->name('login.form');
    Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');
    Route::get('/register/form', [AdminController::class, 'RegisterForm'])->name('register.form');
    Route::post('/register/create', [AdminController::class, 'RegisterCreate'])->name('register.create');
    Route::get('/dashboard', [AdminController::class, 'AdminDashboard'])->name('dashboard.admin')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
});

Route::get('/category', [CategoryController::class, 'Index'])->name('category');
Route::post('/category/add', [CategoryController::class, 'Create'])->name('category.add');
Route::get('/category/edit/{id}', [CategoryController::class, 'Edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'Update'])->name('category.update');
Route::get('/category/delete/{id}', [CategoryController::class, 'Delete'])->name('category.delete');


Route::get('/', function () {
    return view('frontend.index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
