<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;
use App\Models\Clinic;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;

class ProcedureController extends Controller
{
    //
    public function create()
    {
        if (! Gate::allows('create-procedure')) {
            abort(403);
        }

        return view('procedure.create')->with([
            'procedures'=> Procedure::all(),
            'clinics'=> Clinic::all()
        ]);
    }

    public function store()
    {
        if (! Gate::allows('store-procedure')) {
            abort(403);
        }

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
        if (! Gate::allows('index-procedure')) {
            abort(403);
        }

        $procedures = Procedure::all();

        return view('procedure.index')->with(['procedures'=> $procedures]);
    }

    public function show(Procedure $procedure)
    {
        if (! Gate::allows('show-procedure')) {
            abort(403);
        }

        return view('procedure.show')->with(['procedure' => $procedure]);
    }

    public function destroy(Procedure $procedure)
    {
        if (! Gate::allows('destroy-procedure', $procedure)) {
            abort(403);
        }


        $procedure->delete();

        return back()->with('feedback', ' ลบหัตถการ '.$procedure->name. ' สำเร็จแล้ว');

    }

    public  function edit(Procedure $procedure)
    {
        if (! Gate::allows('edit-procedure')) {
            abort(403);
        }

        return view('procedure.edit')->with([
            'procedure'=> $procedure,
            'clinics' => Clinic::all()
        ]);
    }

    public function update(Procedure $procedure)
    {
        $data = request()->all();
        $validated = request()->validate([
            'name' => [
                'required',
                Rule::unique('procedures')->where(fn ($query) => $query->where('clinic_id', $data['clinic_id'])),
                'max:255'
            ],
            'clinic_id' => 'required|exists:clinics,id',
        ]);

        $procedure->update($validated);

        return redirect()->route('procedure')->with('feedback', 'update หัตถการสำเร็จแล้ว ');
    }

}


