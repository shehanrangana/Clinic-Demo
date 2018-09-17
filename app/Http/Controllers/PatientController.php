<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'patient_id' => 'unique:patients,patient_id|required',
        //     'name' => 'required',
        //     'addressLine1' => 'required',
        //     'addressLine2' => 'required',
        //     'nic' => 'required|digits:10',
        //     'gender' => 'required', 
        //     'birthday' => 'required',
        //     'mobile' => 'required|numeric|digits:10',
        //     'gMobile' => 'required|numeric|digits:10'
        // ]); 

        $patient = new Patient;
        $patient->name = $request->name;
        $patient->addressLine1 = $request->addressLine1;
        $patient->addressLine2 = $request->addressLine2;
        $patient->addressLine3 = $request->addressLine3;
        $patient->gender = $request->gender;
        $patient->birthday = $request->birthday;
        $patient->nic = $request->nic;
        $patient->mobile = $request->mobile;
        $patient->gMobile = $request->gMobile;
        $patient->save();

        $data = Patient::all();
        return view('Admin_dashboard/patients')->with('patients', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
