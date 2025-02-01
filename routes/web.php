<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee',[EmployeeController::class,'index']);
Route::get('/create',[EmployeeController::class,'createPage']);
Route::get('/edit',[EmployeeController::class,'EditPage']);

