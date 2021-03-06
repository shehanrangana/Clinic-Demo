<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        $password = str_random(8);

        // $this->validate($request, [
        //     'name' => 'required',
        //     'password' => 'required|min:8',
        //     'confirm_password' => 'required|min:8',
        //     'email' => 'unique:users,email|required',
        //     'gender' => 'required',
        //     'birthday' => 'required',
        //     'mobile' => 'required|numeric', 
        //     'qualifications' => 'required',
        //     'user_role' => 'required'
        // ]); 
        $user = new User;
        $user->name = $request->name;
        $user->password = Hash::make($password);
        $user->gender = $request->gender;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->user_role = $request->user_role;
        $user->degree = $request->degree;
        $user->save();

        $data = User::all();
        return view('Admin_dashboard/users')->with('users', $data);

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
