<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Clinic;
use Illuminate\Validation\Rule;

class ClinicController extends Controller
{
    public function create()
    {
        return view('clinic.create');
    }



    public function store()
    {
        $data = request()->all(); //รับมาจาก form

        $validated = request()->validate([
            'code' => 'required|max:6',
            'name' => 'required|unique:clinics|max:255',
        ]);

    //$nameAlready = Clinic::where('name',$data['name'])->count();
    //$cl = Clinic::where('name','โรคไต')->count();
    //return $nameAlready;

    // if ($nameAlready > 0){
    //     return back()->with('feedback', 'ชื่อคลินิกนี้มีซ้ำ')->withInput();

    // }


    $clinic = new Clinic();
    $clinic->code = $validated['code'];
    $clinic->name = $validated['name'];
    $clinic->save();

    //return $clinic;

    return redirect()->route('home')->with('feedback', 'เพิ่มคลินิกสำเร็จแล้ว');


    }

    public function index() // []
    {
        $clinics = Clinic::all();

        return view('clinic.index')->with(['clinics' => $clinics]);
    }

    public function show(Clinic $clinic)
    {
        return view('clinic.show')->with(['clinic' => $clinic]);
    }

    public function destroy(Clinic $clinic)
    {
        $clinic->delete();

        return back()->with('feedback', ' ลบคลินิก '.$clinic->name. ' สำเร็จแล้ว');
    }

    public function edit(Clinic $clinic)
    {
        return view('clinic.edit')->with(['clinic'=> $clinic]);
    }

    public function update(Clinic $clinic)
    {
        $validated = request()->validate([
            'code' => 'required|max:6',
            'name' => 'required|unique:clinics|max:255',
        ]);

        $clinic->update($validated);
        return redirect()->route('clinic')->with('feedback', 'update คลินิกสำเร็จแล้ว ');
    }
}
