<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\employeeController;
use App\Http\Controllers\Admin\ApplicationController;

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

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('employee',[employeeController::class,'viewEmployee'])->name('admin.view.employee');
Route::get('employee/add',[employeeController::class,'AddEmployee'])->name('admin.add.employee');
Route::post('employee/store',[employeeController::class,'StoreEmployee'])->name('employee.store');
Route::get('employee/edit/{id}',[employeeController::class,'editEmployee'])->name('employee.edit');
Route::get('employee/delete/{id}',[employeeController::class,'deleteEmployee'])->name('employee.delete');
Route::get('employee/status/{id}',[employeeController::class,'StatusChange'])->name('employee.status.change');

Route::get('application',[ApplicationController::class,'viewApplication'])->name('admin.view.application');
Route::get('application/add',[ApplicationController::class,'AddApplication'])->name('admin.add.application');
Route::post('application/store',[ApplicationController::class,'StoreApplication'])->name('application.store');
Route::get('application/edit/{id}',[ApplicationController::class,'editApplication'])->name('application.edit');
Route::get('application/delete/{id}',[ApplicationController::class,'deleteApplication'])->name('application.delete');
Route::get('application/status/{id}',[ApplicationController::class,'StatusChange'])->name('application.status.change');

});


Route::get('admin/logout', [AdminController::class,'destroy'])->name('admin.logout');


require __DIR__.'/auth.php';
