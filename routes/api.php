<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserRegistrationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::post('/register', [UserRegistrationController::class,'register']);
Route::post('/employee/create', [EmployeeController::class,'createEmployee']);
Route::get('/employee/list', [EmployeeController::class,'index']);
Route::put('/employee/update/{employee}', [EmployeeController::class,'updateEmployee']);

Route::post('/department/create', [DepartmentController::class,'createDepartment']);
Route::get('/department/list', [DepartmentController::class,'index']);
Route::put('/department/update/{department}', [DepartmentController::class,'updateDepartment']);

Route::post('/login', [UserRegistrationController::class,'login'])->name('login');
