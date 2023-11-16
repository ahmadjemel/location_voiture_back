@extends("layouts.template")
@section("title","Liste des Clients")
@section('content')

   <div class="d-grid gap-2 d-md-flex justify-content-md-end">

<a href="{{route('client.create')}}"><button class="btn btn-success">+</button></a>
</div>
<table class="table table-striped ">
    <thead>
        <tr>
            <th>id</th>
            <th>CIN</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Age</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($clients as $client )
        <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->cin}}</td>
            <td>{{$client->nom}}</td>
            <td>{{$client->prenom}}</td>
            <td>{{$client->age}}</td>
            <td>{{$client->tel}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->adresse}}</td>

            <td >
                <a href="{{route('client.update',$client->id)}}"><button class="btn btn-success">Modifier</button></a>

                <form class="d-inline justify" action="{{route('client.destroy',$client->id)}}"method="post">@csrf @method("delete")<button class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>

        @empty
        <tr>
            <th colspan="9"@class(['text-center','p-4', 'font-bold' => true])>pas de client</th>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
