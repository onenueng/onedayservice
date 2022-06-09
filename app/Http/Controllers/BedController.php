<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Bed;
use Illuminate\Validation\Rule;

class BedController extends Controller
{
    public function create()
    {
        return view('bed')->with([
            //'beds'=> Bed::all(),//ไม่ต้องส่งค่าเพราะไม่ได้ทำ drop list
            'rooms'=> Room::all() // ส่งค่าเพื่อทำ drop list
        ]);
    }

    public function store()
    {

        $data = request()->all(); //รับมาจาก form

        $validated = request()->validate([
            'no' => [
                'required',
                Rule::unique('beds')->where(fn ($query) => $query->where('room_id', $data['room_id'])),
                'max:255'
            ],
            'room_id' => 'required|exists:rooms,id',
            'type' => 'required'
        ]);
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

    }
}
