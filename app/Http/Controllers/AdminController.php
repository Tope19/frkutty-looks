<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderby('id','desc','!=')->get();
        return view('admin.dashboard', compact('users'));
    }

    public function logout(){
        Session::flush();
        return redirect()->route('login');
    }

    public function availability(){
        $user = Auth::User();
        return view('admin.schedule.index', compact('user'));
    }

    public function createAvailabilty(Request $request){
        $user = Auth::User();

        request()->validate([
            'booking_limit' => 'required|string|max:100',
            'available_days_start' => 'required|string|max:100',
            'available_days_end' => 'required|string|max:25',
            'available_hours_start' => 'nullable|string|max:25',
            'available_hours_end' => 'nullable|string|max:25',

        ]);

        $user->booking_limit = $request->input('booking_limit');
        $user->available_days_start = $request->input('available_days_start');
        $user->available_days_end = $request->input('available_days_end');
        $user->available_hours_start = $request->input('available_hours_start');
        $user->available_hours_end = $request->input('available_hours_end');


        $affected_row = $user->save();

        if (!empty($affected_row)) {
            return redirect()->back()->with('flash_message_success', 'Schedule updated successfully.');
        } else {
            return redirect()->back()->with('flash_message_error', 'Operation failed !');
        }
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
