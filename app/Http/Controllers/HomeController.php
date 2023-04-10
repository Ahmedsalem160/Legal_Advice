<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawer;
use App\Models\User;
use App\Models\Advice;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    public function postRegister(Request $req)
    {
        $email    = $req->email;
        $name    = $req->name;
        $password = bcrypt($req->password);
        User::create(['name'=>$name,
                      'email'=>$email,
                      'password'=>$password]);
        return redirect()->route('user.home');
    }

    public function postLogin(Request $req)
    {
        $email    = $req->email;
        $password = $req->password;
        if (Auth::attempt(['email'=>$email, 'password'=>$password])) {
            return redirect()->route('user.home');
        }else{
            return redirect()->back()->withInputs($req->email);
        }
        
    }

    public function userLogout(){
        Auth::guard('web')->logout();
        return redirect()->route('get.user.login');
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lawers = Lawer::all();
        return view('user.home', compact('lawers'));
    }

    public function showLawer($id)
    {
        $lawer = Lawer::findOrFail($id);
        return view('user.showLawer', compact('lawer'));
    }

    public function chat($lawer_id)//$user_id
    {   
        $lawer = Lawer::findOrFail($lawer_id);
        $user_id = Auth::user()->id;

        $messages=Advice::where('lawer_id',$lawer_id)
                                ->where('user_id',$user_id)->get();
        
       
        return view('user.chat', compact('lawer','messages'));
    }
}
