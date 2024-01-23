<?php

namespace App\Http\Controllers;

use App\Models\Physician;
use Illuminate\Http\Request;

class PhysicianController extends Controller
{
    public function assignPatient(int $physicianId, int $patientId): void
    {
        $patient = Physician::find($physicianId);
        $patient->patients()->attach($patientId);
    }
}
