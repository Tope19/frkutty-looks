<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\Booking;
use App\Gallery;

class WebController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function aboutus(){
        return view('about-us');
    }

    public function gallery(){
        $galleriesAll = Gallery::orderBy('id' , 'desc')->paginate(8);
        return view('gallery', compact('galleriesAll'));
    }

    public function book_now(){
        $users = User::where('role','Admin')->get();
        return view('book', compact('users'));
    }

    public function submitBooking(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            $book = new Booking();
            $book->user_id = Auth::User()->id;
            $book->admin_id = $data['admin_id'];
            $book->description = $data['description'];
            $book->date = $data['date'];
            $book->time = $data['time'];
            $book->save();

            return redirect()->back()->with('flash_message_success','Booking Submitedd successfully!');
        }

    }
}
