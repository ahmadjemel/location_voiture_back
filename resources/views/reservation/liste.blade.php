@extends("layouts.template")

@section("title","liste Reservation")


@php
    use Illuminate\Support\Carbon;

@endphp
@section("content")
<div class="card-body">
    <table id="example1" class="table table-bordered table-striped ">

        <thead>
            <tr>
                <th>Modele</th>
                <th>Kilometrage</th>
                <th>Nom_client</th>
                <th>Prenom_client</th>
                <th>Cin_client</th>
                <th>Tél_client</th>
                <th>Début</th>
                <th>Fin</th>
                <th>Prix</th>

            </tr>
        </thead>
            <tbody>

                @forelse($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->voiture->modele}}</td>
                    <td>{{ $reservation->voiture->kilometrage}}</td>
                    <td>{{ $reservation->client->nom}}</td>
                    <td>{{ $reservation->client->prenom}}</td>
                    <td>{{ $reservation->client->cin}}</td>
                    <td>{{ $reservation->client->tel}}</td>
                    <td>{{ $reservation->date_debut}}</td>
                    <td>{{ $reservation->date_fin}}</td>
                    <td>{{ $voiture->prix}} TND</td>
                </tr>
                @empty
                <tr>
                    <td colspan="9"@class(['text-center','p-4', 'font-bold' => true])>pas de reservation</td>
                </tr>
    @endforelse
            </tbody>



    </table>
</div>
@endsection

