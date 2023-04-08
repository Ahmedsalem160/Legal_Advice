<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawer;
use App\Traits\FileTrait;

class LawerController extends Controller
{
    use FileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lawers = Lawer::all();
        return view('admin.lawer.show', compact('lawers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lawer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $path = 'assets/file-store';
        $lawer = new Lawer();
        
        $lawer->username    = $req->username;
        $lawer->fullname    = $req->fullname;
        $lawer->nation_id   = $req->nation_id;
        $lawer->Syndicate_id= $req->Syndicate_id;
        $lawer->address     = $req->address;
        $lawer->salary      = $req->salary;
        $lawer->phone       = $req->phone;
        $lawer->rank        = $req->rank;
        $lawer->grad_year   = $req->grad_year;
        $lawer->email       = $req->email;
        $lawer->password    = bcrypt($req->password);
        if (isset($req->photo) && $req->photo != null) {
            $lawer->photo = $this->save_file($req->photo, $path);
        }
        $lawer->save();
        return redirect()->route('lawer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function show(Lawer $lawer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lawer = Lawer::findOrFail($id);
        return view('admin.lawer.edit', compact('lawer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $path = 'assets/file-store';
        $lawer_id = $request->lawer_id;
        //$lawer = Lawer::findOrFail($lawer_id);
        if ($request->password != null) {
            Lawer::where('id', $lawer_id)->update(['password' => bcrypt($request->password),]);
        }
        Lawer::where('id', $lawer_id)
                ->update(['username'    => $request->username,
                          'fullname'    => $request->fullname,
                          'nation_id'   => $request->nation_id,
                          'Syndicate_id'=> $request->Syndicate_id,
                          'address'     => $request->address,
                          'salary'      => $request->salary,
                          'phone'       => $request->phone,
                          'rank'        => $request->rank,
                          'grad_year'   => $request->grad_year,
                          'phone'       => $request->phone,
                          'photo'       => $this->save_file($request->photo, $path),]);
        return redirect()->route('lawer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $lawer =Lawer::findOrFail($id);
        $lawer->delete();
        return redirect()->route('lawer.index');
    }
}
