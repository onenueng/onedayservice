<?php

use Illuminate\Support\Facades\Route;
use App\Models\Bed;

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
    //return ['foo' => 'bar'];
    // return 1;
    // return true;
    // return 'one day service app';
    return view('welcome');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::post('/booking', function () {
    // validate
    // save to table
    // redirect
    return request()->all();
});
