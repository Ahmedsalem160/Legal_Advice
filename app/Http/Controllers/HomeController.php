<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawer;

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
        return view('user.chat', compact('lawer'));
    }
}
