<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminAuthenticate;


Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.home');
//->middleware(AdminAuthenticate::class);


//
