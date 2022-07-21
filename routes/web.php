<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
    return redirect()->route('home');
});

Route::get('/booking', [BookingController::class,'index'])->name('booking');
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create'); // create-form
Route::get('/booking/{booking}/edit', [BookingController::class,'edit'])->name('booking.edit'); //กดเข้าไปเพื่อเปิด form ที่มีข้อมูลของ record ที่เราต้องการ edit
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store'); // create-insert to table
Route::delete('/booking/{booking}', [BookingController::class,'destroy'])->name('booking.destroy');
Route::patch('/booking/{booking}', [BookingController::class,'update'])->name('booking.update');

Route::get('/home', HomeController::class)->name('home');
// Route::get('/home', [BookingController::class,'index'])->name('booking');

Route::get('/user', UserController::class)->name('user');
Route::get('/user/{user}', [UserController::class,'show'])->name('user.show');
// Route::get('/user', function(){
//     return view('user.index');
// });



Route::get('/clinic', [ClinicController::class,'index'])->name('clinic'); //เป็นหน้า index เพื่อแสดงข้อมูลทั้งหมด
Route::get('/clinic/create', [ClinicController::class,'create'])->name('clinic.create');
Route::get('/clinic/{clinic}/edit', [ClinicController::class,'edit'])->name('clinic.edit'); //กดเข้าไปเพื่อเปิด form ที่มีข้อมูลของ record ที่เราต้องการ edit
Route::get('/clinic/{clinic}', [ClinicController::class,'show'])->name('clinic.show');
Route::post('/clinic', [ClinicController::class,'store'])->name('clinic.store');
Route::delete('/clinic/{clinic}', [ClinicController::class,'destroy'])->name('clinic.destroy');
Route::patch('/clinic/{clinic}', [ClinicController::class,'update'])->name('clinic.update'); // ทำการ update ค่าจาก form ที่เรา  edit

Route::get('/procedure',[ProcedureController::class,'index'])->name('procedure');
Route::get('/procedure/create',[ProcedureController::class,'create'])->name('procedure.create');
Route::get('/procedure/{procedure}/edit', [ProcedureController::class,'edit'])->name('procedure.edit');
Route::get('/procedure/{procedure}', [ProcedureController::class,'show'])->name('procedure.show');
Route::post('/procedure',[ProcedureController::class,'store'])->name('procedure.store');
Route::delete('/procedure/{procedure}',[ProcedureController::class,'destroy'])->name('procedure.destroy');
Route::patch('/procedure/{procedure}',[ProcedureController::class,'update'])->name('procedure.update');

Route::get('/room',[RoomController::class,'index'])->name('room');
Route::get('/room/create',[RoomController::class,'create'])->name('room.create');
Route::get('/room/{room}/edit', [RoomController::class,'edit'])->name('room.edit');
Route::get('/room/{room}',[RoomController::class,'show'])->name('room.show');
Route::post('/room', [RoomController::class,'store'])->name('room.store');
Route::delete('/room/{room}', [RoomController::class,'destroy'])->name('room.destroy');
Route::patch('/room/{room}', [RoomController::class,'update'])->name('room.update');

Route::get('/bed', [BedController::class,'index'])->name('bed');
Route::get('/bed/create', [BedController::class,'create'])->name('bed.create');
Route::get('/bed/{bed}/edit', [BedController::class,'edit'])->name('bed.edit');
Route::get('/bed/{bed}', [BedController::class,'show'])->name('bed.show');
Route::post('/bed', [BedController::class,'store'])->name('bed.store');
Route::delete('/bed/{bed}', [BedController::class,'destroy'])->name('bed.destroy');
Route::patch('/bed/{bed}', [BedController::class,'update'])->name('bed.update');





