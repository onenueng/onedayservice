<?php

use Illuminate\Support\Facades\Route;
use App\Models\Bed;
use App\Models\Booking;
use App\Models\Procedure;
use App\Models\Clinic;
use App\Models\Room;
use Illuminate\Support\Facades\App;

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
    //check booking date back
    $currentdate = date('Y-m-d');

    if ($data['datetime_start'] < $currentdate){
        return back()->with('feedback', 'จองวันที่ย้อนหลังไม่ได้')->withInput();

    }

    //insert time to date
    if ($data['time'] == 'morning'){
        $datetime_start = $data['datetime_start'] . ' ' . '09:00:00';
        $datetime_stop  = $data['datetime_start'] . ' ' . '12:00:00';
     } else {
         $datetime_start = $data['datetime_start'] . ' ' . '13:00:00';
         $datetime_stop  = $data['datetime_start'] . ' ' . '16:00:00';
     }
     //check bed & datetime
    $bookAlready = Booking::where('bed_id',$data['bed_id'])->where('datetime_start', $datetime_start)->count();


    if ($bookAlready > 0){
        return back()->with('feedback', 'เตียงนี้ถูกจองแล้ว')->withInput();

    }

    $booking = new Booking();
    $booking->patient_id = 1;
    $booking->bed_id = $data['bed_id'];
    $bed = Bed::find($data['bed_id']);
    $booking->room_id = $bed->room->id;
    $booking->procedure_id = $data['procedure_id'];
    $procedure = Procedure::find($data['procedure_id']);
    $booking->clinic_id = $procedure->clinic->id;
    // datetime_start
    $booking->datetime_start = $datetime_start;
    $booking->datetime_stop = $datetime_stop;

    // week_day
    $booking->week_day = now()->parse($data['datetime_start'])->weekDay();
    $booking->user_id = 1;
    $booking->save(); //insert data

    return redirect()->route('home')->with('feedback', 'จองเตียงสำเร็จแล้ว');
});

Route::get('/my-home', function () {
    return view('index');
})->name('home');

Route::get('/clinic', function () {
    return view('clinic');
});

Route::post('/clinic', function () {

    $data = request()->all();
    
       
    $booking = new Booking();
    $booking->patient_id = 1;
    $booking->bed_id = $data['bed_id'];
    $bed = Bed::find($data['bed_id']);
    $booking->room_id = $bed->room->id;
    $booking->procedure_id = $data['procedure_id'];
    $procedure = Procedure::find($data['procedure_id']);
    $booking->clinic_id = $procedure->clinic->id;
    // datetime_start
    $booking->datetime_start = $datetime_start;
    $booking->datetime_stop = $datetime_stop;

    // week_day
    $booking->week_day = now()->parse($data['datetime_start'])->weekDay();
    $booking->user_id = 1;
    $booking->save(); //insert data
   
    

});

Route::get('/bed', function () {
    return view('bed')->with([
        'beds'=>Bed::all(),
        'rooms' =>Room::all()

    ]);
});


Route::post('/bed', function () {

    $data = request()->all(); //รับมาจาก form
    // return $data;
    $nameAlready = Bed::where('no',$data['no'])->where('type', $data['type'])->count();


    if ($nameAlready > 0){
        return back()->with('feedback', 'หมายเลขเตียง/ชนิด/นี้มีแล้ว')->withInput();
    }

    $bed = new Bed();
    $bed->no = $data['no'];
    $bed->type = $data['type'];
    //$room = Room::find($data['room_id']);
    // return $bed;
    $bed->room;
    // $bed = Bed::find($data['bed_id']);
    // $booking->room_id = $bed->room->id;
    // $room = Room::find($data['room_id']);
    $bed->room_id = $data['room_id'];
    $bed->save();
    // return $bed;
    // return request()->all();
    return redirect()->route('home')->with('feedback', 'เพิ่มเตียงสำเร็จแล้ว');

});





