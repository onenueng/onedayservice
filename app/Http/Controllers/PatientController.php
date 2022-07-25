<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {

        $patients = Patient::all();

        return view('patient.index')->with([
            'patients'=> $patients
        ]);
    }

    public function show(Patient $patient)
    {
        return view('patient.show')->with(['patient' => $patient]);
    }

    public function edit(Patient $patient)
    {
        return view('patient.edit')->with(['patient'=> $patient]);
    }

    public function update(Patient $patient)
    {
        $validated = request()->validate([
            'hn' => 'required|max:8',
            'full_name' => 'required|max:255',
            'gender' => 'required|max:10',
            'dob' => 'required',
            'phone' => 'required|max:10',
            // 'full_name' => 'required|unique:users|max:255',
        ]);

        $patient->update($validated);
        return redirect()->route('patient')->with('feedback', 'update ข้อมูลสำเร็จแล้ว ');
    }





}
