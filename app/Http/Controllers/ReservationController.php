<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Voiture;
use App\Models\reservation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations=Reservation::paginate(10);
        return view ('reservation.liste',compact("reservations"))->with('i',(request('page',1)-1)* 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($voitureId)
    {
        $voiture = Voiture ::findOrFail($voitureId);
        $clients =Client::all();
        return view('reservation.create',compact('voiture','clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $request->validate([
        'nom' => 'required|string',
        'prenom' => 'required|string',
         'cin' => 'required|numeric',
         'tel' => 'required|numeric',

        'date_debut' => 'required|date',
        'date_fin' => 'required|date|after:date_debut',

        'saison' => 'string|in:hiver,été',

    ]);
    $reservation = new Reservation([
        'nom' => $request->input('nom'),
        'prenom' => $request->input('prenom'),
        'cin' => $request->input('cin'),
        'tel' => $request->input('tel'),
        'date_debut' => $request->input('date_debut'),
        'date_fin' => $request->input('date_fin'),
    ]);
    $reservation->save();
     $voiture = Voiture::find($request->input('voiture_id'));
        $voiture->reservations()->save($reservation);
        return redirect()->route("reservation.liste")
        ->with('success','Reservation enregistrée avec succès.');

    }

    /**
     * Display the specified resource.
     */
    public function show(reservation $reservation)
    {
        return view("reservation.show",compact("reservation"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route("reservation.liste")->with('Annulation effectuée');

    }
    public function reserve(Request $request, $id)
    {
        $voiture = Voiture::find($id);

        return redirect()->route('reservation.liste')->with('success', 'Réservation effectuée avec succès');
    }

public function annulerReservation($id){
    $reservation=Reservation::where('id','=',$id)->firstOrFail();
    $reservation->delete();
    return back()->with('annulee','Votre réservation a été annulée');
}



public function getReservation($voitureId)
{
    // Récupérez les données de réservation en fonction de $voitureId.
    $reservation = Reservation::where('voiture_id', $voitureId)->first();

    if ($reservation) {
        return response()->json(['success' => true, 'reservation' => $reservation]);
    } else {


return response()->json(['success' => false, 'message' => 'Aucune réservation trouvée pour cette voiture.']);
    }
}
public function calculPrix(Request $request){

}

}
