<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;
use App\Models\Clinic;

class ProcedureController extends Controller
{
    //
    public function create()
    {
        return view('procedure')->with([
            'procedures'=> Procedure::all(),
            'clinics'=> Clinic::all()
        ]);
    }

    public function store()
    {
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
    }
}
