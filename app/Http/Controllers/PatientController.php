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




}
