<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Traits\FileTrait;

class ClientController extends Controller
{
    use FileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.client.show', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $req)
    {
        $path = 'assets/file-store';
        $client = new Client();

        $client->username = $req->username;
        $client->nation_id = $req->nation_id;
        $client->fullname = $req->fullname;
        $client->phone = $req->phone;
        $client->address = $req->address;
        $client->email = $req->email;
        $client->password = bcrypt($req->password);
        if(isset($client->photo) && $client->photo != null){
            $client->photo = $this->save_file($req->photo, $path);
        }

        $client->save();

        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        if ($req->password !== null) {
            Client::where('id', $id)->update(['password' => bcrypt($req->password)]);
        }
        Client::where('id', $id)->update([
            'username'  => $req->username,
            'nation_id' => $req->nation_id,
            'fullname'  => $req->fullname,
            'phone'     => $req->phone,
            'address'   => $req->address,
            'email'     => $req->email,
        ]);
        
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('client.index');
    }
}
