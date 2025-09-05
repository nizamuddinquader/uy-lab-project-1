<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/admin/alluser',function(){
        return view('dashboard.alluser');
    })->name('admin.alluser');

});

// Route::get('/admin/alluser',[AdminController::class,'index'])->name('admin.alluser');
Route::get('/admin/adduser',[AdminController::class,'addUser'])->name('admin.adduser');
Route::get('/admin/edituser',[AdminController::class,'editUser'])->name('admin.edituser');
Route::get('/admin/showuser',[AdminController::class,'showUser'])->name('admin.showuser');





require __DIR__.'/auth.php';

