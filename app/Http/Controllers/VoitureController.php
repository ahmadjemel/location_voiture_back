<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoitureRequest;
use App\Models\Client;
use App\Models\Marque;
use App\Models\Reservation;
use App\Models\Voiture;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $voitures=Voiture::paginate(5);
       //Prix de summer augmentation 20%
       $dateJour=Carbon::now();
       $ete= $dateJour->month>=5 && $dateJour->month<=9;
       $prixSummer = $ete ? 1.2 : 1;
       foreach($voitures as $voiture ){
        $voiture->prix *= $prixSummer;
       }
               return view ('voiture.index',compact("voitures"))
        ->with('i',(request('page',1)-1)* 5);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $marques=Marque::all();
        return view("voiture.create",compact('marques'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'immatricule'=>'required|max:20',
                'modele'=>'required|max:20',
                'marque_id'=>'required|max:20',
                'reservation_id'=>'nullable |max:20',
                'photo'=>'required|image|mimes:png,jpg,webp,jpeg|max:2048'
            ]);
        //traitement photo
        $inputs=$request->all();
        if($photo=$request->file("photo")){
            $newfile=time().".".$photo->getClientOriginalExtension();
            $photo->move('images/voitures/',$newfile);
            $inputs['photo']=$newfile;
           }
        Voiture::create($inputs);
        return redirect()->route("voiture.index")
        ->with('success','une nouvelle voiture ajouté avec succés.');

    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(Voiture $voiture)
    {
        return view("voiture.edit",compact("voiture"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voiture $voiture)
    {
        $request->validate([
            'marque_id'=>'required|max:20',
            'photo'=>'image|mimes:png,jpg,webp,jpeg|max:2048',

        ]);
    $inputs=$request->all();
    if($photo=$request->file("photo")){
        $newfile=time().".".$photo->getClientOriginalExtension();

        if(file_exists("images/voitures/".$voiture->photo))
        unlink("images/voitures/".$voiture->photo);
        $photo->move( "images/voitures/", $newfile);
        $inputs["photo"]= $newfile;
    }else{
       $inputs['photo']=$voiture->photo;
    }
        $voiture->update($inputs);
        return redirect()->route("voiture.index")
        ->with('success','Modification effectuée avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voiture $voiture)
    {
        if(file_exists("images/voitures/".$voiture->photo))
        unlink("images/voitures/".$voiture->photo);
        $voiture->delete();
        return redirect()->route("voiture.index")->with('Suppression effectuée');

    }


}
