@extends("layouts.template")

@section("title","liste Reservation")

@php
    use Illuminate\Support\Carbon;

@endphp
@section("content")

@if ($errors->any())
<li class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</li>
@endif

<div class="d-grid gap-2 d-md-flex justify-content-md-end">

    <a href="{{route('voiture.index')}}" class="btn btn-primary me-md-2"id="button" role="button">Ajouter un Réservation</a>
</div>

<div class="card-body">
    <table id="example1" class="table table-bordered table-striped  ">
        <thead>
            <tr>
                <th>Model</th>
                <th>Matricule</th>
                <th>Kilometrage</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Cin</th>
                <th>Phone</th>
                <th>Début</th>
                <th>Fin</th>
                <th>Prix</th>
                <th>Action</th>
            </tr>
        </thead>
            <tbody >
                @forelse($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->voiture->modele}}</td>
                    <td>{{ $reservation->voiture->immatricule}}</td>
                    <td >{{ $reservation->voiture->kilometrage}}</td>
                    <td>{{ $reservation->client->nom}}</td>
                    <td>{{ $reservation->client->prenom}}</td>
                    <td>{{ $reservation->client->cin}}</td>
                    <td>{{ $reservation->client->tel}}</td>
                    <td >{{ $reservation->date_debut}}</td>
                    <td>{{ $reservation->date_fin}}</td>
                        <?php
                            $reservation->date_debut = \Carbon\Carbon::parse($reservation->date_debut);
                            $reservation->date_fin = \Carbon\Carbon::parse($reservation->date_fin);
                            $reservation->prixTot = $reservation->voiture->prix * $reservation->date_debut->diffInDays($reservation->date_fin);
                        ?>
                        <td>{{ $reservation->prixTot}} TND</td>
                    <td>
                        <a  href="{{route('reservation.edit',$reservation->id)}}">
                            <button id="button" type="submit" class="btn btn-primary m-2 d-inline"><i class="fa fa-edit"></i></button>
                        </a>
                        <form class="d-inline" id="button" action="{{route('reservation.destroy',$reservation->id)}}"method="post">
                            @csrf
                             @method("delete")
                             <button id="button" onclick="return confirm('êtes-vous sure de supprimer?')" class=" btn btn-danger "> <i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>


                </tr>
                @empty
                <tr>
                    <td colspan="10"@class(['text-center','p-4', 'font-bold' => true])>pas de reservation</td>
                </tr>
    @endforelse
            </tbody>



    </table>
</div>
@endsection



