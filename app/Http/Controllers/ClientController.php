<?php

namespace App\Http\Controllers;

use App\Models\client;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients=Client::all();
        return view('client.liste',compact("clients"));

        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("client.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         //executer la requete d'insertion
           Client::create($request->all());

     return redirect()->route("client.index")->with('success','client crée avec succés.');

    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        return view("client.edit")->with('success','le modification effectuée avec succés');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $client)
    {
        $request->validate([
            'name'=> 'required|max=20',
            'prenom'=> 'required|max=20',
            'tel'=> 'required|min:8',
            'email'=> 'required|unique:clients,email,'.$client->id.'|max:150',
            'password'=> 'required|min:8|',

        ]);
        $client->update($request->all());
        return redirect()->route("client.index")->with('success','Modification effectuée avec succés');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        $client->delete();
        return redirect()->route("client.index");

    }
}
