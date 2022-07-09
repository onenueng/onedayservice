<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bed;
use App\Models\Procedure;
use App\Models\Booking;


class BookingController extends Controller
{

    // CRUD => create(GET create | POST store), read (GET resource/{id} show) update delete
    public function create()
    {
        return view('booking.create')->with([
            'beds'=> Bed::all(),
            'procedures'=> Procedure::all()
        ]);
    }

    public function store()
    {
        $data = request()->all();
        $currentdate = date('Y-m-d');

        // validate
        //check booking date back
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
        $booking->datetime_start = $datetime_start;
        $booking->datetime_stop = $datetime_stop;

        // week_day
        $booking->week_day = now()->parse($data['datetime_start'])->weekDay();
        $booking->user_id = 1;
        $booking->save(); //insert record นี้เข้าไปในตาราง

        return redirect()->route('home')->with('feedback', 'จองเตียงสำเร็จแล้ว');
    }


    public function index()
    {
        $bookings = Booking::all();
        $procedures = Procedure::all();

        return view('booking.index')->with([
                'bookings' => $bookings,
                'procedures'=> $procedures
                ]);
    }


    public function destroy(Booking $booking)
    {
        $booking->delete();

        return back()->with('feedback', ' ลบ booking  no.'.$booking->id. ' สำเร็จแล้ว');
    }

    public function edit(ฺBooking $booking)
    {
        return view('booking.edit')->with([
            'booking' => $booking,
            'beds' => Bed::all(),
            'procedures'=> Procedure::all()
            ]);
    }


    public function update(Booking $booking)
    {
        $validated = request()->validate([
            'datetime_start' => 'required',
            'time'           => 'required'
        ]);

        $booking->update($validated);

        return redirect()->route('booking')->with('feedback', 'update booking no'. $booking->id .' สำเร็จแล้ว ');
    }




}
