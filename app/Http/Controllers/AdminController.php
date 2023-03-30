<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Requests\LoginRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Issue;
use App\Models\Lawer;
use App\Models\Client;
use Auth;

class AdminController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth:admin');
    // }
    public function login(){
        return view('admin.login');
        
    }

    public function postlogin(LoginRequest $req){
        // $this->validate($req,[
        //     'email'     => 'required|email',
        //     'password'  =>'required',
        // ]);
        $email = $req->input('email');
        $password = $req->input('password');
       
        if (Auth::guard('admin')->attempt(['email'=>$email, 'password'=>$password])) {
            
            return redirect()->route('admin.dash');
        }else {
            return redirect()->back()->withInputs($req->$email)->with('failed');//->withErrors()
        }
    }

    public function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('get.admin.login');
    
    }

    public function dashboard(){
        // path all data to dashboard
        $issues   = Issue::all();
        $lawers   = Lawer::all();
        $clients  = Client::all();
        return view('admin.dashboard', compact(['issues', 'lawers', 'clients']));
    }
}
