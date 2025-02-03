<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee',[EmployeeController::class,'index'])->name('employee.index');
Route::get('/create',[EmployeeController::class,'createPage'])->name('employee.create');
Route::post('/employee',[EmployeeController::class,'Store'])->name('employee.store');
Route::get('/edit/{id}',[EmployeeController::class,'EditPage'])->name('employee.edit');
Route::put('/update/{id}',[EmployeeController::class,'Update'])->name('employee.update');
Route::delete('/delete/{id}',[EmployeeController::class,'Delete'])->name('employee.delete');
