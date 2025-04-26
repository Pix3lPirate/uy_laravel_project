<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\IncomeCatagoryController;
use App\Http\Controllers\ExpenceCatagoryController;
use App\Http\Controllers\ExpenceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IncomeCategoryController;





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

// Admin panel Routes Start..
Route::get('dashboard', [adminController::class, 'index']);


Route::get('dashboard/user', [userController::class, 'index']);
Route::get('dashboard/user/add', [userController::class, 'add']);
Route::get('dashboard/user/edit', [userController::class, 'edit']);
Route::get('dashboard/user/view', [userController::class, 'view']);
Route::post('dashboard/user/submit', [userController::class, 'insert']);
Route::get('dashboard/user/update', [userController::class, 'update']);
Route::get('dashboard/user/softdelete', [userController::class, 'softdelete']);
Route::get('dashboard/user/restore', [userController::class, 'restore']);
Route::get('dashboard/user/delete', [userController::class, 'delete']);


Route::get('dashboard/income', [incomeController::class, 'index']);
Route::get('dashboard/income/add', [incomeController::class, 'add']);
Route::get('dashboard/income/edit', [incomeController::class, 'edit']);
Route::get('dashboard/income/view', [incomeController::class, 'view']);
Route::post('dashboard/income/submit', [incomeController::class, 'insert']);
Route::get('dashboard/income/update', [incomeController::class, 'update']);
Route::get('dashboard/income/softdelete', [incomeController::class, 'softdelete']);
Route::get('dashboard/income/restore', [incomeController::class, 'restore']);
Route::get('dashboard/income/delete', [incomeController::class, 'delete']);


Route::get('dashboard/income/catagory', [incomeCatagoryController::class, 'index']);
Route::get('dashboard/income/catagory/add', [incomeCatagoryController::class, 'add']);
Route::get('dashboard/income/catagory/edit', [incomeCatagoryController::class, 'edit']);
Route::get('dashboard/income/catagory/view', [incomeCatagoryController::class, 'view']);
Route::post('dashboard/income/catagory/submit', [incomeCatagoryController::class, 'insert']);
Route::get('dashboard/income/catagory/update', [incomeCatagoryController::class, 'update']);
Route::get('dashboard/income/catagory/softdelete', [incomeCatagoryController::class, 'softdelete']);
Route::get('dashboard/income/catagory/restore', [incomeCatagoryController::class, 'restore']);
Route::get('dashboard/income/catagory/delete', [incomeCatagoryController::class, 'delete']);


Route::get('dashboard/expense', [ExpenceController::class, 'index']);
Route::get('dashboard/expense/add', [ExpenceController::class, 'add']);
Route::get('dashboard/expense/edit', [ExpenceController::class, 'edit']);
Route::get('dashboard/expense/view', [ExpenceController::class, 'view']);
Route::post('dashboard/expense/submit', [ExpenceController::class, 'insert']);
Route::get('dashboard/expense/update', [ExpenceController::class, 'update']);
Route::get('dashboard/expense/softdelete', [ExpenceController::class, 'softdelete']);
Route::get('dashboard/expense/restore', [ExpenceController::class, 'restore']);
Route::get('dashboard/expense/delete', [ExpenceController::class, 'delete']);


Route::get('dashboard/expense/catagory', [ExpenceCatagoryController::class, 'index']);
Route::get('dashboard/expense/catagory/add', [ExpenceCatagoryController::class, 'add']);
Route::get('dashboard/expense/catagory/edit', [ExpenceCatagoryController::class, 'edit']);
Route::get('dashboard/expense/catagory/view', [ExpenceCatagoryController::class, 'view']);
Route::post('dashboard/expense/catagory/submit', [ExpenceCatagoryController::class, 'insert']);
Route::get('dashboard/expense/catagory/update', [ExpenceCatagoryController::class, 'update']);
Route::get('dashboard/expense/catagory/softdelete', [ExpenceCatagoryController::class, 'softdelete']);
Route::get('dashboard/expense/catagory/restore', [ExpenceCatagoryController::class, 'restore']);
Route::get('dashboard/expense/catagory/delete', [ExpenceCatagoryController::class, 'delete']);



require __DIR__.'/auth.php';
