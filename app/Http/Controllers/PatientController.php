<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
class PatientController extends Controller
{
    public function index()
    {
    	$patients = Patient::all();

    	return view('patient.index', compact('patients'));
    }
    public function create()
    {
    	return view('patient.create');
    }
    public function store(Request $request)
    {
    	$patient = New Patient;
    	$patient->name = request('name');
    	$patient->address = request('address');
    	$patient->city = request('city');
    	$patient->province = request('province');
    	$patient->postal_code = request('postal_code');
    	$patient->home_phone = request('home_phone');
    	$patient->work_phone = request('work_phone');
    	$patient->date_of_birth = request('date_of_birth');
    	$patient->email = request('email');
    	$patient->age = request('age');
    	$patient->sex = request('sex');
    	$patient->cell_phone = request('cell_phone');
    	$patient->person_to_contact = request('person_to_contact');
    	$patient->relationship_to_patient = request('relationship_to_patient');
    	$patient->phone = request('phone');
    	$patient->created_by = Auth::user()->name;
    	$patient->updated_by = Auth::user()->name;
    	$patient->save();

    	return redirect()->route('patient.index')->with('success_alert', 'Patient Information Successfully Added');
    	// return view('patient.create');
    }

    public function show($id)
    {
    	$patient = Patient::findorfail($id);
    	return view('patient.show', compact('patient'));
    }
    public function edit($id)
    {
    	$patient = Patient::findorfail($id);
    	return view('patient.edit', compact('patient'));
    }
    public function update($id, Request $request)
    {
    	$patient = Patient::findorfail($id);
    	$patient->name = request('name');
    	$patient->address = request('address');
    	$patient->city = request('city');
    	$patient->province = request('province');
    	$patient->postal_code = request('postal_code');
    	$patient->home_phone = request('home_phone');
    	$patient->work_phone = request('work_phone');
    	$patient->date_of_birth = request('date_of_birth');
    	$patient->email = request('email');
    	$patient->age = request('age');
    	$patient->sex = request('sex');
    	$patient->cell_phone = request('cell_phone');
    	$patient->person_to_contact = request('person_to_contact');
    	$patient->relationship_to_patient = request('relationship_to_patient');
    	$patient->phone = request('phone');
    	$patient->created_by = Auth::user()->name;
    	$patient->updated_by = Auth::user()->name;
    	$patient->save();

    	return back()->with('success_alert', 'Patient Information Successfully Updated');
    }
    public function destroy($id)
    {
        $patient = Patient::findorfail($id);
        $patient->updated_by = Auth::user()->name;
        $patient->deleted_by = Auth::user()->name;
        $patient->save();
        $patient->delete();

        return back()->with('success_alert', 'Patient Information Successfully Archived');
    }
}
