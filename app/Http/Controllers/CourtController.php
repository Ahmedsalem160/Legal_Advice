<?php

namespace App\Http\Controllers;

use App\Models\Court;
use Illuminate\Http\Request;
use App\Http\Requests\CourtRequest;


class CourtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courts = Court::all();
        return view('admin.court.show',compact('courts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.court.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourtRequest $request)
    {
        $court = new Court();

        $court->name = $request ->name;
        $court->address = $request ->address;

        $court->save();

        return redirect()->route('court.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function show(Court $court)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $court = Court::findOrFail($id);
        return view('admin.court.edit', compact('court'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Court::where('id', $id)->update(['name'   =>$request->name,
                                         'address'=>$request->address,]);
        return redirect()->route('court.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $court = Court::findOrFail($id);
        $court->delete();
        return redirect()->route('court.index');
    }
}
