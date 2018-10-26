<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $pays = Payment::where('is_paid','=',0)->take(5)->orderBy('created_at','asc')->get();
         return view('admin.payments',['pays'=>$pays]);
    }
    public function allpaids()
    {
        $sum = 0;
         $pays = Payment::where('is_paid','=',1)->orderBy('created_at','asc')->get();
         foreach ($pays as $pay){
             $sum += $pay->price ;
         }
         return view('admin.paid_payments',['pays'=>$pays,'sum'=>$sum]);
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
    public function store(Request $request,$id)
    {
        $doctor = Doctor::findOrFail($id);
         $pay = new  Payment();
         $pay->payer_name = $request->name;
         $pay->payer_lastname = $request->lastname;
         $pay->payer_phone = $request->phone;
         $pay->payer_age = $request->age;
         $pay->price = $request->price;
         $pay->doctor_id = $id;
         $pay->type_payment = $request->type_payment;
         $pay->save();
          return view('doctor.doctor',['doctor'=>$doctor]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paid = $request->is_paid;
      Payment::where('id', $id)->update(['is_paid' => $paid]);
      return redirect()->route('paid.payments');
    }
    public function paid(Request $request, $id)
    {
        $paid = $request->is_paid;
      Payment::where('id', $id)->update(['is_paid' => $paid,'updated_at'=>now()]);
      return redirect()->route('pays.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
