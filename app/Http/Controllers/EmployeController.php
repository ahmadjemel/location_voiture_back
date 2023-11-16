<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes=Employe::paginate(25);
        return view('employe.liste',compact("employes"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $employes=Employe::all();
        return view("employe.create",compact("employes"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Employe::create($request->all());
          return redirect()->route("employe.index");

    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $employe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employe)
    {
        //
    }
}
