<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\RoomController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booking', [BookingController::class, 'create']); // create-form
Route::get('/booking/{id}', [BookingController::class, 'show']); // read
Route::post('/booking', [BookingController::class, 'store']); // create-insert to table

Route::get('/my-home', function () {
    return view('index');
})->name('home');

Route::get('/clinic', [ClinicController::class,'create']);

Route::post('/clinic', [ClinicController::class,'store']);

Route::get('/procedure',[ProcedureController::class,'create']);

Route::post('/procedure',[ProcedureController::class,'store']);


Route::get('/room',[RoomController::class,'create']);

Route::post('/room', [RoomController::class,'store']);

Route::get('/bed', [BedController::class,'create']);

Route::post('/bed', [BedController::class,'store']);





