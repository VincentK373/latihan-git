<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', [EmployeeController::class, 'show']);

Route::get('/create-employee', [EmployeeController::class, 'createEmployee']);

Route::post('/store-employee', [EmployeeController::class, 'storeEmployee']);

Route::get('/edit-employee/{id}', [EmployeeController::class, 'edit'])->name('edit');

Route::patch('/update-employee/{id}', [EmployeeController::class, 'update'])->name('update');

Route::delete('/delete-employee/{id}', [EmployeeController::class, 'delete'])->name('delete');