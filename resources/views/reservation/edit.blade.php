@extends("layouts.template")
@php
    use Illuminate\Support\Carbon;

@endphp
@section("content")
<div class="card card-primary ">
    @section("title","Réservation")
     <form class="m-3" action="{{route('reservation.update',$reservation->id)}}" method="POST">
    @method('put')
        @csrf
        <input type="hidden" name="voiture_id"  id="voiture_id" value="{{ $reservation->voiture_id }}">



        <div class="row ">
        <div class="form-group col-6">
            <label class=" container label-control mb-3"  for="nom">Nom </label>
            <input type="text" class="form-control" id="nom"value="{{$reservation->client->nom}}" name="nom" required>
        </div>
        <div class="form-group col-6">
            <label  class=" container label-control mb-3" for="prenom">Prenom </label>
            <input type="text" class="form-control " id="prenom"value="{{$reservation->client->prenom}}" name="prenom" required>
        </div>
        <div class="form-group col-6">
            <label class=" container label-control mb-3"  for="cin">Cin </label>
            <input type="text" class="form-control" id="cin"value="{{$reservation->client->cin}}" name="cin" required>
        </div>
            <div class="form-group col-6">
            <label class=" container label-control mb-3"  for="tel">Tél_Client</label>
            <input type="text" class="form-control" id="tel" value="{{$reservation->client->tel}}"name="tel" required>
        </div>
    </div>
        <div class="form-group col-6">
            <label class=" container label-control mb-3"  for="email">Email</label>
            <input type="text" class="form-control" id="email"value="{{$reservation->client->email}}" name="email" required>
        </div>


            <div class="form-group col-6">
                <label for="date_debut">Début réservation</label>
                <input type="date" class="form-control" id="date_debut"value="{{$reservation->date_debut}}" name="date_debut"  required>
            </div>
            <div class="form-group col-6">
                <label for="date_fin">Fin réservation</label>
                <input type="date" class="form-control" id="date_fin" value="{{$reservation->date_fin}}" name="date_fin" required>
            </div>
            <input type="hidden" name="saisson">
            <input type="hidden" name="prixTot">
        </div>
        <button  class="btn btn-primary me-5 ">Valider</button>
        <a href="{{route('reservation.index')}}" class=" btn btn-danger">Annullé</a>
    </form>
</div>
@endsection


