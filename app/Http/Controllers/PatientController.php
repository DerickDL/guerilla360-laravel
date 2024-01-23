<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return Patient::with('physicians')->get();
    }

    public function assignPhysician(Request $request, int $patientId, int $physicianId): void
    {
        $patient = Patient::find($patientId);
        $patient->physicians()->attach($physicianId);
    }
}
