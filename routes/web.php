<?php

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\ExpenseCategoryController;

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
Route::get('/admin/updateUser',[AdminController::class,'updateUser'])->name('admin.updateUser');
Route::get('/admin/softDeleteUser',[AdminController::class,'softDeleteUser'])->name('admin.softDeleteUser');
Route::get('/admin/restoreUser',[AdminController::class,'restoreUser'])->name('admin.restoreUser');
Route::get('/admin/deleteUser',[AdminController::class,'deleteUser'])->name('admin.deleteUser');

//income routes
// Route::get('/admin/income',[IncomeController::class,'index'])->name('admin.income.index');
// Route::get('/admin/income/create',[IncomeController::class,'create'])->name('admin.income.create');
// Route::get('/admin/income/edit',[IncomeController::class,'edit'])->name('admin.income.edit');
// Route::get('/admin/income/show',[IncomeController::class,'show'])->name('admin.income.show');
// Route::get('/admin/income/update',[IncomeController::class,'update'])->name('admin.income.update');
// Route::get('/admin/income/softDelete',[IncomeController::class,'softDelete'])->name('admin.income.softDelete');
// Route::get('/admin/income/restore',[IncomeController::class,'restore'])->name('admin.income.restore');
// Route::get('/admin/income/delete',[IncomeController::class,'delete'])->name('admin.income.delete');


//income category routes
Route::get('/admin/income/category/index',[IncomeCategoryController::class,'index'])->name('admin.income.category.index');
Route::get('/admin/income/category/create',[IncomeCategoryController::class,'create'])->name('admin.IncomeCategory.create');
Route::post('/admin/income/category/store',[IncomeCategoryController::class,'store'])->name('admin.IncomeCategory.store');
Route::get('/admin/income/category/edit/{id}',[IncomeCategoryController::class,'edit'])->name('admin.income.category.edit');
Route::get('/admin/income/category/show/{id}',[IncomeCategoryController::class,'show'])->name('admin.income.category.show');
Route::put('/admin/income/category/update',[IncomeCategoryController::class,'update'])->name('admin.income.category.update');
Route::get('/admin/income/category/soft-delete',[IncomeCategoryController::class,'softDelete'])->name('admin.income.category.soft.delete');
Route::get('/admin/income/category/restore',[IncomeCategoryController::class,'restore'])->name('admin.income.category.restore');
Route::delete('/admin/income/category/delete/{id}',[IncomeCategoryController::class,'destroy'])->name('admin.income.category.destroy');

//expense routes
Route::get('/admin/expense',[ExpenseController::class,'index'])->name('admin.expense.add');
Route::get('/admin/expense/add',[ExpenseController::class,'add'])->name('admin.expense.add');
Route::get('/admin/expense/edit',[ExpenseController::class,'edit'])->name('admin.expense.edit');
Route::get('/admin/expense/show',[ExpenseController::class,'show'])->name('admin.expense.show');
Route::get('/admin/expense/update',[ExpenseController::class,'update'])->name('admin.expense.update');
Route::get('/admin/expense/softDelete',[ExpenseController::class,'softDelete'])->name('admin.expense.softDelete');
Route::get('/admin/expense/restore',[ExpenseController::class,'restore'])->name('admin.expense.restore');
Route::get('/admin/expense/delete',[ExpenseController::class,'delete'])->name('admin.expense.delete');


//expense category routes
Route::get('/admin/expenseCategory',[ExpenseCategoryController::class,'index'])->name('admin.expenseCategory.add');
Route::get('/admin/expenseCategory/add',[ExpenseCategoryController::class,'add'])->name('admin.expenseCategory.add');
Route::get('/admin/expenseCategory/edit',[ExpenseCategoryController::class,'edit'])->name('admin.expenseCategory.edit');
Route::get('/admin/expenseCategory/show',[ExpenseCategoryController::class,'show'])->name('admin.expexpenseCategoryense.show');
Route::get('/admin/expenseCategory/update',[ExpenseCategoryController::class,'update'])->name('admin.expenseCategory.update');
Route::get('/admin/expenseCategory/softDelete',[ExpenseCategoryController::class,'softDelete'])->name('admin.expenseCategory.softDelete');
Route::get('/admin/expenseCategory/restore',[ExpenseCategoryController::class,'restore'])->name('admin.expense.expenseCategory');
Route::get('/admin/expense/delete',[ExpenseCategoryController::class,'delete'])->name('admin.expenseCategory.delete');

route::get('/mail',function(){
   Mail::to('test@example.com')->send(new SendMail()); 
});



require __DIR__.'/auth.php';

