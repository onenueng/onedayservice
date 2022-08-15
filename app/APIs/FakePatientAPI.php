<?php

namespace App\APIs;

use App\Models\Patient;

class FakePatientAPI
{
    public function getPatient($hn)
    {
        $patient = Patient::where('hn', $hn)->first();

        if ($patient) {
            return $patient;
        }

        $fakePatient = Patient::factory()->definition();

        $newPatient = new Patient;
        $newPatient->hn = $hn;
        $newPatient->full_name = $fakePatient['full_name'];
        $newPatient->dob = $fakePatient['dob'];
        $newPatient->gender = $fakePatient['gender'];
        $newPatient->phone = $fakePatient['phone'];

        $newPatient->save();

        return $newPatient;

    }
}