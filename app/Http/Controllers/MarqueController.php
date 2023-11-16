<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $marques=Marque::all();
        return view ('marque.index',compact("marques"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marques=Marque::all();
        return view("marque.create",compact('marques'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                "nom"=>"max:20|required|alpha",

            ]);

        Marque::create($request->all());

        return redirect()->route("marque.index")->with('success','marque crée avec succés.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Marque $marque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marque $marque)
    {
        return view("marque.edit",compact("marque"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marque $marque)
    {
        $marque->update($request->all());
        return redirect()->route("marque.index")->with('success','Modification effectuée');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marque $marque)
    {
        $marque->delete();
        return redirect()->route("marque.index");

    }
}
