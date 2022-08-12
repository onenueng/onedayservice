<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;

class RoomController extends Controller
{
    //
    public function create()
    {
        if (! Gate::allows('create-room')) {
            abort(403);
        }


        return view('room.create');
    }


    public function store()
    {
        if (! Gate::allows('store-room')) {
            abort(403);
        }

        $data = request()->all(); //รับมาจาก form


        $validated = request()->validate([
            'name_short' => 'required|unique:rooms|max:255',
            'name' => 'required|unique:rooms|max:255',
        ]);

        // $nameAlready = Room::where('name_short',$data['name_short'])->orwhere('name', $data['name'])->count();

        // if ($nameAlready > 0){
        //     return back()->with('feedback', 'ชื่อห้องนี้มีซ้ำ')->withInput();
        // }


        $room = new Room();
        $room->name_short = $validated['name_short'];
        $room->name = $validated['name'];
        $room->save();

        //return $room;
        return redirect()->route('home')->with('feedback', 'เพิ่มห้องสำเร็จแล้ว');
    }

    public function index()
    {
        if (! Gate::allows('index-room')) {
            abort(403);
        }

        $rooms = Room::all();

        return view('room.index')->with(['rooms'=> $rooms]);


    }


    public function show(Room $room)
    {
        if (! Gate::allows('show-room')) {
            abort(403);
        }

        return view('room.show')->with(['room' => $room]);
    }

    public function destroy(Room $room)
    {
        if (! Gate::allows('destroy-room')) {
            abort(403);
        }

        $room->delete();

        return back()->with('feedback', ' ลบห้อง '.$room->name. ' สำเร็จแล้ว');

    }

    public function edit(Room $room)
    {
        if (! Gate::allows('edit-room')) {
            abort(403);
        }

        return view('room.edit')->with(['room'=> $room]);
    }

    public function update(Room $room)
    {
        $validated = request()->validate([
            'name_short' => 'required|unique:rooms|max:255',
            'name' => 'required|unique:rooms|max:255',
        ]);

        $room->update($validated);
        return redirect()->route('room')->with('feedback', 'update ห้องสำเร็จแล้ว ');
    }
}
