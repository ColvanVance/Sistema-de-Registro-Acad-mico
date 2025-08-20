<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ChargeController;
use App\Http\Controllers\BossController;
use App\Http\Controllers\AbsenceController;
use App\Models\Absence;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('employee', EmployeeController::class);
Route::resource('charge', ChargeController::class);
Route::resource('boss', BossController::class);
Route::resource('absence', AbsenceController::class);
