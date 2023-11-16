@extends("layouts.template")
@php
    use Illuminate\Support\Carbon;

@endphp
@section("content")
<div class="card card-primary ">
    @section("title","Réservation")

    @if($errors->any())
    <ul class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    @endif
  <form class="m-3" action="{{route('reservation.store')}}" method="POST">
        @csrf
        <input type="hidden" name="voiture_id"  id="voiture_id" value="{{ $voiture->id }}">
        @foreach ($clients as $client)
        <div class="row ">
        <div class="form-group col-4">
            <label class=" container label-control mb-3"  for="nom">Nom </label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group col-4">
            <label  class=" container label-control mb-3" for="prenom">Prenom </label>
            <input type="text" class="form-control " id="prenom" name="prenom" required>
        </div>
        <div class="form-group col-4">
            <label class=" container label-control mb-3"  for="cin">Cin </label>
            <input type="text" class="form-control" id="cin" name="cin" required>
        </div>
            <div class="form-group col-4">
            <label class=" container label-control mb-3"  for="tel">Tél_Client</label>
            <input type="text" class="form-control" id="tel" name="tel" required>
        </div>
        @endforeach

            <div class="form-group col-4">
                <label for="date_debut">Début réservation</label>
                <input type="date" class="form-control" id="date_debut" name="date_debut"  value="date_debut" required>
            </div>
            <div class="form-group col-4">
                <label for="date_fin">Fin réservation</label>
                <input type="date" class="form-control" id="date_fin" value="date_fin" name="date_fin" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary me-5 ">Valider</button>
        <a href="{{route('voiture.index')}}" class=" btn btn-danger">Annullé</a>
    </form>
</div>
@endsection
