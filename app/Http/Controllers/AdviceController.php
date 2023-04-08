<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advice;

class AdviceController extends Controller
{
    public function index(){
        $advice = Advice::all();
        //
    }

    public function store(Request $req, $id){
        dd($req);
    }
}
