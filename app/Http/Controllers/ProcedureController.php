<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;
use App\Models\Clinic;
use Illuminate\Validation\Rule;

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

        $validated = request()->validate([
            'name' => [
                'required',
                Rule::unique('procedures')->where(fn ($query) => $query->where('clinic_id', $data['clinic_id'])),
                'max:255'
            ],
            'clinic_id' => 'required|exists:clinics,id',
        ]);


        // $nameAlready = Procedure::where('name', $data['name'])->where('clinic_id', $data['clinic_id'])->count();

        // if ($nameAlready > 0){
        //     return back()->with('feedback', 'ชื่อหัตถการนี้ซ้ำ')->withInput();
        // }

        $procedure = new Procedure();
        $procedure->name = $validated['name'];
        $procedure->clinic_id = $validated['clinic_id'];
        $procedure->save();

        return redirect()->route('home')->with('feedback', 'เพิ่มหัตถการสำเร็จแล้ว');
    }

    public function index()
    {
        $procedures = Procedure::all();

        return view('procedure.index')->with(['procedures'=> $procedures]);
    }

    public function show(Procedure $procedure)
    {
        return view('procedure.show')->with(['procedure' => $procedure]);
    }

    public function destroy(Procedure $procedure)
    {
        $procedure->delete();

        return back()->with('feedback', ' ลบหัตถการ '.$procedure->name. ' สำเร็จแล้ว');

    }

}


