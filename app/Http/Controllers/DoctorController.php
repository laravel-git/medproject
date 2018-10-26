<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctor.all_doctors',['doctors'=>$doctors]);
    }
    public function all()
    {
        $doctors = Doctor::all();
        return view('med.doctors',['doctors'=>$doctors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor = new Doctor();
        $path =  $request->file('image')->store('images', 'public');
        $doctor->name=$request->name;
        $doctor->lastname=$request->lastname;
        $doctor->age=$request->age;
        $doctor->room=$request->room;
        $doctor->doctor_image =$path;
        $doctor->save();
        return redirect()->route('docs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $doctor = Doctor::findOrFail($id);
      return view('doctor.doctor',['doctor'=>$doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctor.edit',['doctor'=>$doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'age'=>'required',
            'room'=>['required',Rule::unique('doctors')->ignore($id)],
        ]);
        $doctor= Doctor::findOrFail($id);
        $image = $doctor->doctor_image;
        $doctor->name = $request->name;
        $doctor->lastname = $request->lastname;
        $doctor->doctor_image = $image;
        $doctor->room = $request->room;
        $doctor->age = $request->age;
        $doctor->save();
        return redirect()->route('docs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public  function destroy($id){
        $doctor =Doctor::findOrFail($id);
        $doctor->delete();
        return redirect()->route('docs.index');
    }
}
