<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.allusers',['users'=>$users]);
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
        //
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
         $user = User::findOrFail($id);
         return view('user.edit',['user'=>$user]);
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
        $request->validate([
            'name'=>'required',
            'email'=>['required',Rule::unique('users')->ignore($id)],
        ]);
        $user= User::findOrFail($id);
         $user->name = $request->name;
         $user->email = $request->email;
         if($request->is_admin){
             $user->is_admin = $request->is_admin;
         }else{
             $user->is_admin = $user->is_admin;
         }

         if($request->is_doctor){
             $user->is_doctor = $request->is_doctor;
         }else{
             $user->is_doctor = $user->is_doctor;
         }
         if($request->is_cashier){
             $user->is_cashier = $request->is_cashier;
         }
         else{
             $user->is_cashier = $user->is_cashier;
         }

         $user->save();
         return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
