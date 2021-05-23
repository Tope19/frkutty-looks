<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
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

    public function unapproved_appointments(){
        $verifications = Booking::where('status','Pending')->get();
        return view('admin.appointment.unapproved.index', compact('verifications'));
    }

    public function approved_appointments(){
        $approval = Booking::where('status', 'Approved')->get();
        return view('admin.appointment.approved.index', compact('approval'));
    }

    public function verify_appointment_info($id)
    {
        $verification = Booking::findorfail($id);

        return view('admin.appointment.unapproved.info',compact('verification'));
    }

    public function verify_appointment_status(Request $request, $id)
    {
        $data = $request->validate([
            'status'=> 'required|string',
            'comment'=> 'nullable|string',
        ]);
        $verification = Booking::findorfail($id);
        $verification->update($data);
        
        Mail::send('emails.bookingdetails', ['verification' => $verification], function ($m) use ($verification){
            $m->from('hello@fruttylooks.com.ng', 'Frutty Looks');
            
            $m->to($verification->user->email, $verification->user->fname)->subject('Frutty Looks Booking Info!');

        });
        return redirect()->route('unapproved_appointments')->with('flash_message_success','Booking '.$data['status'].' successfully!');
    }

    public function declined_appointments(){
        $declined = Booking::where('status', 'Declined')->get();
        return view('admin.appointment.declined.index',compact('declined'));
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
