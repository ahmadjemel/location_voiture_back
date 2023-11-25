<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Voiture;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('voiture', 'client')->get();
        return view('reservation.index', compact('reservations'));
    }

    public function create($voitureId)
    {
        $voiture = Voiture::findOrFail($voitureId);
        $clients = Client::all();
        return view('reservation.create', compact('voiture', 'clients'));
    }

    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'voiture_id' => 'required',
            'date_debut' => 'required|before:date_fin',
            'date_fin' => 'required|after:date_debut',
            'saisson' => 'nullable|string|max:255',
            'cin' => 'required',
        ]);

        $client = Client::where('cin', $validated['cin'])->first();

        if (!$client) {
            $client = new Client();
            $client->nom = $request->input('nom');
            $client->prenom = $request->input('prenom');
            $client->cin = $request->input('cin');
            $client->tel = $request->input('tel');
            $client->email = $request->input('email');
            $client->save();
        }

        $voiture = $request->input('voiture_id');
        $debut = $request->input('date_debut');
        $fin = $request->input('date_fin');

        $reserve = Reservation::where('voiture_id', $voiture)
            ->where(function ($query) use ($debut, $fin) {
                $query->whereBetween('date_debut', [$debut, $fin])
                    ->orWhereBetween('date_fin', [$debut, $fin])
                    ->orWhere(function ($query) use ($debut, $fin) {
                        $query->where('date_debut', '<', $debut)
                            ->where('date_fin', '>', $fin);
                    });
            })
            ->get();

        if ($reserve->isEmpty()) {
            // Create a new Reservation
            $reservation = new Reservation();
            $reservation->client_id = $client->id;
            $reservation->voiture_id = $request->input('voiture_id');
            $reservation->date_debut = date('Y-m-d');
            $reservation->date_fin = Carbon::parse($reservation->date_debut)->addWeek();
            $reservation->saisson = $request->input('saisson');
            $reservation->save();

            return redirect()->route('reservation.index')->with('success','Réservation Validé avec succés') ;
        } else {
            // La voiture n'est pas disponible aux dates spécifiées
            return redirect()->route('voiture.index')->with('error','Désolé, n\'est pas disponible ');
        }
    
    }

    public function show(Reservation $reservation)
    {
        return view("reservation.show", compact("reservation"));
    }

    public function edit(Reservation $reservation)
    {
        return view('reservation.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $reservation->update($request->all());
        return redirect()->route('reservation.index')->with('success', 'Réservation mise à jour avec succès');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route("reservation.index")->with('success', 'Suppression effectuée');
    }

    public function reserve(Request $request, $id)
    {
        $voiture = Voiture::find($id);
        return redirect()->route('reservation.index')->with('success', 'Réservation effectuée avec succès');
    }

    public function getReservation($voitureId)
    {
        $reservation = Reservation::where('voiture_id', $voitureId)->first();

        if ($reservation) {
            return response()->json(['success' => true, 'reservation' => $reservation]);
        } else {
            return response()->json(['success' => false, 'message' => 'Aucune réservation trouvée pour cette voiture.']);
        }
    }
}
