<?php

use Illuminate\Support\Facades\Route;
use App\Models\Bed;
use App\Models\Procedure;
use App\Models\Clinic;
use App\Models\Room;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\BookingController;

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

Route::get('/clinic', function () {
    return view('clinic');
});

Route::post('/clinic', function () {

    $data = request()->all(); //รับมาจาก form

    $nameAlready = Clinic::where('name',$data['name'])->count();
    //$cl = Clinic::where('name','โรคไต')->count();
    //return $nameAlready;

    if ($nameAlready > 0){
        return back()->with('feedback', 'ชื่อคลินิกนี้มีซ้ำ')->withInput();

    }


    $clinic = new Clinic();
    $clinic->code = $data['code'];
    $clinic->name = $data['name'];
    $clinic->save();

    //return $clinic;

    return redirect()->route('home')->with('feedback', 'เพิ่มคลินิกสำเร็จแล้ว');



});

Route::get('/procedure', function () {
    return view('procedure')->with([
        'procedures'=> Procedure::all(),
        'clinics'=> Clinic::all()
    ]);
});

Route::post('/procedure', function () {

    $data = request()->all(); //รับมาจาก form

    $nameAlready = Procedure::where('name',$data['name'])->count();

    if ($nameAlready > 0){
        return back()->with('feedback', 'ชื่อหัตถการนี้ซ้ำ')->withInput();
    }

    $procedure = new Procedure();
    $procedure->name = $data['name'];
    $clinic = Clinic::find($data['clinic_id']);
    $procedure->clinic_id = $data['clinic_id'];
    $procedure->save();
    // return request()->all();
    return redirect()->route('home')->with('feedback', 'เพิ่มหัตถการสำเร็จแล้ว');
});


Route::get('/room', function () {
    return view('room');
});

Route::post('/room', function () {

    $data = request()->all(); //รับมาจาก form

    $nameAlready = Room::where('name_short',$data['name_short'])->orwhere('name', $data['name'])->count();

    if ($nameAlready > 0){
        return back()->with('feedback', 'ชื่อห้องนี้มีซ้ำ')->withInput();
    }

    $room = new Room();
    $room->name_short = $data['name_short'];
    $room->name = $data['name'];
    $room->save();

    //return $room;
    return redirect()->route('home')->with('feedback', 'เพิ่มห้องสำเร็จแล้ว');
});

Route::get('/bed', function () {
    return view('bed')->with([
        //s'beds'=> Bed::all(),//ไม่ต้องส่งค่าเพราะไม่ได้ทำ drop list
        'rooms'=> Room::all() // ส่งค่าเพื่อทำ drop list
    ]);

});

Route::post('/bed', function () {

    $data = request()->all(); //รับมาจาก form
    // $nameAlready = Bed::where('no',$data['no'])->where('type', $data['type'])->count();
    $nameAlready = Bed::where('no',$data['no'])->where('room_id', $data['room_id'])->count();


    if ($nameAlready > 0){
        return back()->with('feedback', 'หมายเลขเตียงนี้มีแล้ว')->withInput();
    }

    $bed = new Bed();
    $bed->no = $data['no'];
    $bed->type = $data['type'];
    $bed->room_id = $data['room_id'];
    $bed->save();
    return redirect()->route('home')->with('feedback', 'เพิ่มเตียงสำเร็จแล้ว');

});





