<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DeployController;
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
Route::get('/', [PagesController::class,'home']);



Route::get('/', function () {
  return view('home');
});

Route::get('employee/add', function () {
  return view('employee/add');
});





Route::resource('supplier', 'App\Http\Controllers\SupplierController');
Route::resource('stock', 'App\Http\Controllers\StockController');

Route::resource('pages', 'App\Http\Controllers\EquipmentController');
Route::resource('reports', 'App\Http\Controllers\ReportsController');
Route::resource('employee', 'App\Http\Controllers\EmployeeController');
Route::resource('deploy', 'App\Http\Controllers\DeployController');
Route::resource('salereports', 'App\Http\Controllers\SaleController');
Auth::routes();
