<?php

use Illuminate\Support\Facades\Route;
use App\Models\Bed;
use App\Models\Booking;
use App\Models\Procedure;

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
    return view('booking')->with([
        'beds'=>Bed::all(),
        'procedures'=> Procedure::all()
    ]);
});

Route::post('/booking', function () {
    // validate
    // save to table
    // redirect
    $data = request()->all();

    //return $data;
    
    $booking = new Booking();
    $booking->patient_id = 1;
    $booking->bed_id = $data['bed'];
    $bed = Bed::find($data['bed']);
    $booking->room_id = $bed->room->id;
    $booking->procedure_id = $data['procedure'];
    $procedure = Procedure::find($data['procedure']);
    $booking->clinic_id = $procedure->clinic->id;
    // datetime_start
    if ($data['time'] == 'morning'){
       $booking->datetime_start = $data['datetime_start'] . ' ' . '09:00:00';
       $booking->datetime_stop  = $data['datetime_start'] . ' ' . '12:00:00';
    } else {
        $booking->datetime_start = $data['datetime_start'] . ' ' . '13:00:00';
        $booking->datetime_stop  = $data['datetime_start'] . ' ' . '16:00:00';
    }
    //week_day
    $booking->week_day = now()->parse($data['datetime_start'])->weekDay();
    $booking->user_id = 1;
    $booking->save();

    return $booking;
});
