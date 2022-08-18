<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Bed;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;

class BedController extends Controller
{
    public function create()
    {
        if (! Gate::allows('create-bed')) {
            abort(403);
        }

        return view('bed.create')->with([
            //'beds'=> Bed::all(),//ไม่ต้องส่งค่าเพราะไม่ได้ทำ drop list
            'rooms'=> Room::all() // ส่งค่าเพื่อทำ drop list
        ]);
    }

    public function store()
    {

        // $data = request()->all(); //รับมาจาก form
        if (! Gate::allows('store-bed')) {
            abort(403);
        }

        $validated = request()->validate([ // candidate key [no + room_id] => beds
            'no' => [
                'required',
                Rule::unique('beds')->where(fn ($query) => $query->where('room_id', request()->room_id)),
                'max:255'
            ],
            'room_id' => 'required|exists:rooms,id',
            'type' => 'required',
            'active' => 'required',
        ]);
        // $nameAlready = Bed::where('no',$data['no'])->where('type', $data['type'])->count();
        // $nameAlready = Bed::where('no',$data['no'])->where('room_id', $data['room_id'])->count();


        // if ($nameAlready > 0){
        //     return back()->with('feedback', 'หมายเลขเตียงนี้มีแล้ว')->withInput();
        // }

        $bed = new Bed();
        $bed->no = $validated['no'];
        $bed->type = $validated['type'];
        $bed->room_id = $validated['room_id'];
        $bed->active = $validated['active'];
        $bed->save();
        return redirect()->route('bed')->with('feedback', 'เพิ่มเตียงสำเร็จแล้ว');

    }

    public function index()
    {
        if (! Gate::allows('index-bed')) {
            abort(403);
        }

        $beds = Bed::all();

        return view('bed.index')->with(['beds' => $beds]);
    }

    public function show(Bed $bed)
    {

        if (! Gate::allows('show-bed')) {
            abort(403);
        }


        // $bed = Bed::find($bed);
        // return $bed;

        return view('bed.show')->with(['bed' => $bed]);
    }

    public function destroy(Bed $bed)
    {
        if (! Gate::allows('destroy-bed', $bed)) {
            abort(403);
        }

        $bed->delete();

        return back()->with('feedback', 'Del เตียง'.$bed->no.' '. $bed->room->name. ' สำเร็จแล้ว '  );
    }

    public function edit(Bed $bed)
    {
        if (! Gate::allows('edit-bed')) {
            abort(403);
        }

        return view('bed.edit')->with([
            'bed' => $bed,
            'rooms'=> Room::all()
        ]);
    }

    public function update(Bed $bed)
    {
        $validated = request()->validate([ // candidate key [no + room_id] => beds
            'no' => [
                'required',
                Rule::unique('beds')->where(fn ($query) => $query->where('room_id', request()->room_id)),
                'max:255'
            ],
            'room_id' => 'required|exists:rooms,id',
            'type' => 'required',
            'active' => 'required',
        ]);

        $bed->update($validated);

        return redirect()->route('bed')->with('feedback', 'update เตียงสำเร็จแล้ว ');
    }
}
