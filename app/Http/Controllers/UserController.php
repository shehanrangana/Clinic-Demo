<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8',
            'name' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'nic' => 'required',
            'mobile' => 'required|numeric', 
            'qualifications' => 'required',
            'user_role' => 'required'
        ]); 

        $userType = 0;

        if ($request->user_role == "option1") {
            $userType = 1;
        } elseif ($request->user_role == "option2") {
            $userType = 2;
        } elseif ($request->user_role == "option3") {
            $userType = 3;
        } elseif ($request->user_role == "option4"){
            $userType = 4;
        }

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->birthday = $request->birthday;
        $user->nic = $request->nic;
        $user->mobile = $request->mobile;
        $user->qualifications = $request->qualifications;
        $user->user_role = $userType;
        $user->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
