<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
       return view ('home');
    }

    public function create()
    {
       return view ('registration');
    }

    public function store(Request $request)
    {
        $request->validate(
         [
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'weight' => 'required',
            'age' => 'required',
            'checkup_date' => 'required',
            'checkup_time' => 'required',
            'doctor_name' => 'required',
        ]
        );
        $patient = new Patient;
        $patient->name = $request['name'];
        $patient->email = $request['email'];
        $patient->weight = $request['weight'];
        $patient->age = $request['age'];
        $patient->checkup_time = $request['checkup_time'];
        $patient->doctor_name = $request['doctor_name'];
        $patient->gender = $request['gender'];
        $patient->checkup_date = $request['checkup_date'];
        $patient->save();

        return redirect('/patient/create')->withSuccess('Patient Appointment Successfully.');
    }

    public function view()
    {

        $patients = Patient::all();
        $data = compact('patients');
        return view ('view')->with($data);
    }

    public function edit($id)
    {
        $Patient = Patient::find($id);
        if (is_null($Patient)) {
            return redirect('/patient');
        }
        else{
            $data = compact('Patient');
            return view ('update')->with($data);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'weight' => 'required',
            'age' => 'required',
            'checkup_date' => 'required',
            'checkup_time' => 'required',
            'doctor_name' => 'required',
            ]
        );
        $Patient = Patient::find($id);
        $Patient->name = $request['name'];
        $Patient->email = $request['email'];
        $Patient->weight = $request['weight'];
        $Patient->age = $request['age'];
        $Patient->checkup_time = $request['checkup_time'];
        $Patient->doctor_name = $request['doctor_name'];
        $Patient->gender = $request['gender'];
        $Patient->checkup_date = $request['checkup_date'];
        $Patient->save();
        return redirect('/patient')->withSuccess('Registration Updated successfully');
    }

    public function destroy($id)
    {
       $patient = Patient::find($id);
        if (!is_null($patient)) {
            $patient->destroy($id);
        }
       return redirect('/patient')->withSuccess('Patients Deleted successfully');
    }
}
