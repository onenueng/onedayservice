<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {

        // return view('index');
        $bookings = Booking::all();
        $procedures = Procedure::all();

        return view('booking.index')->with([
                'bookings' => $bookings,
                'procedures'=> $procedures
                ]);
    }


}
