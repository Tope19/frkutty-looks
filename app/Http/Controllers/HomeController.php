<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::User();
        $this->welcomeUser($user);
        if($user->role == "Admin"){
            return redirect('admin/dashboard');
        }
        return view('welcome');
    }
    
     public function welcomeUser($user){
        $data['title'] = 'New Signup!';
        $data['email'] = $user->email;
        $data['subject'] = 'Welcome on board '.$user->name;
        $data['name'] = $user->name;
        $data['image'] = '/web/img/logo.png';
        $data['signature'] = '/web/img/signature.png';
        Mail::to($data['email'])->send(new WelcomeUser($data));
        return;
    }
}
