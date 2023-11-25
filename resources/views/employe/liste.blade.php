@extends("layouts.template")
@section('title',"Employés")
@section('content')
<table class="table table-striped">
    <div class="container">
        <a href="{{route('employe.create')}}" class="float-right">Ajouter Employés</a>
    </div>
    <thead>
        <tr>
            <th>id</th>
            <th>CIN</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Telephone</th>
            <th>Poste</th>
            <th>Salaire</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($employes as $employe )
        <tr>
            <td>{{$employe->id}}</td>
            <td>{{$employe->cin}}</td>
            <td>{{$employe->nom}}</td>
            <td>{{$employe->prenom}}</td>
            <td>{{$employe->tel}}</td>
            <td>{{$employe->post}}</td>
            <td>{{$employe->salaire}}</td>
            <td>{{$employe->email}}</td>
            <td>{{$employe->password}}</td>
            <td>
                <a href="{{route('employe.edit',$employe->id)}}"><button class="btn btn-success">Modifier</button></a>
                <form action="{{route('employe.destroy',$employe->id)}}"method="post">@csrf @method("delete")<button onclick="return confirm('êtes-vous sure de supprimer?')" class="btn btn-danger">Supprimer</button>
                </form>
        </tr>

        @empty
        <tr>
            <th colspan="10"@class(['text-center','p-4', 'font-bold' => true])>pas d'employés</th>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
