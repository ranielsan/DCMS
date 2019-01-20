<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\PatientTreatment;
use Illuminate\Support\Facades\Auth;
class PatientTreatmentController extends Controller
{
    public function create($id)
    {
    	$patient = Patient::findorfail($id);
    	$dateNow = now();
    	// dd($dateNow);
    	return view('patient_treatment.create', compact('patient', 'dateNow'));
    }

    public function store($id, Request $request)
    {
    	$patient = Patient::findorfail($id);
    	$patient->save();

    	$treatment = New PatientTreatment;
    	$treatment->treatment_type = request('treatment_type');
    	$treatment->description = request('description');
    	$treatment->created_by = Auth::user()->name;
    	$treatment->updated_by = Auth::user()->name;
    	$treatment->patient_id = $patient->id;
    	$treatment->save();

    	return redirect()->route('patient.show', $patient->id);

    }

    public function show($id, $treatment_id)
    {
    	$patient = Patient::find($id);
    	$treatment = PatientTreatment::find($treatment_id);
    	return view('patient_treatment.show', compact('patient', 'treatment'));
    }

    public function edit($id, $treatment_id)
    {
    	$patient = Patient::find($id);
    	$treatment = PatientTreatment::find($treatment_id);
    	return view('patient_treatment.edit', compact('patient', 'treatment'));
    	
    }
    public function update($id, $treatment_id, Request $request)
    {
    	$patient = Patient::find($id);
    	$patient->updated_by = Auth::user()->name;
    	$patient->updated_at = now();
    	$patient->save();
    	$treatment = PatientTreatment::find($treatment_id);
    	$treatment->treatment_type = request('treatment_type');
    	$treatment->description = request('description');
    	$treatment->updated_by = Auth::user()->name;
    	$treatment->updated_at = now();
    	$treatment->save();
    	return redirect()->route('patient.patient_treatment.show', [$patient->id, $treatment->id]);
    	
    }
    public function delete($id, $treatment_id)
    {
    	$patient = Patient::find($id);
    	$patient->updated_by = Auth::user()->name;
    	$patient->updated_at = now();
    	$patient->save();
    	$treatment = PatientTreatment::find($treatment_id);
    	$treatment->deleted_by = Auth::user()->name;
    	$treatment->save();
    	$treatment->delete();

    	return redirect()->route('patient.show', $patient->id);
    }
}
