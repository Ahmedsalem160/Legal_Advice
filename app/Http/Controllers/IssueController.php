<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IssueRequest;
use App\Models\Issue;
use App\Models\Client;
use App\Models\Court;
use App\Models\Lawer;


class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = Issue::all();
        return view('admin.issue.show', compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courts  = Court::all();
        $lawers  = Lawer::all();
        $clients = Client::all();
        return view('admin.issue.create', compact(['courts', 'lawers', 'clients']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //dd($req);
        $issue = new Issue();
        
        $issue->name = $req->name;
        $issue->type = $req->type;
        $issue->judgment = $req->judge;
        $issue->salary = $req->salary;
        $issue->description = $req->description;
        $issue->client_id = $req->client_id;
        $issue->lawer_id = $req->lawer_id;
        $issue->court_id = $req->court_id;
        if (isset($req->status)) {
            $issue->finish = 1;
        }
        $issue->save();
        return redirect()->route('issue.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        //
    }
}
