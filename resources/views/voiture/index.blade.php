@extends("layouts.template")
@section('title','Liste des voitures')

    @section("content")
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{route('voiture.create')}}" class="btn btn-primary me-md-2" role="button">Ajouter une voiture</a>
    </div>
    <div class="row">
        @foreach($voitures as $voiture)
            <div class="card m-2 mt-2">
                 <div class="col-xm-3  ">
                        <img src="{{asset('images/voitures/'.$voiture->photo)}}"class="img-fluid mx-auto d-block rounded mt-3 "width="80%" height="100%" alt="{{ $voiture->model }}">
                 </div>

                    <div class="col p-3">
                        <h5 class="card-text"><strong> Marque</strong> : {{ $voiture->modele }}</h5>
                        <h5 class="card-text "><strong>Matricule</strong> : {{ $voiture->immatricule }}</h5>
                        <h5 class="card-text"><strong>Kilométrage</strong> : {{ $voiture->kilometrage}} Km</h5>
                        <h5 class="card-text"><strong>Prix /jour </strong> : {{ $voiture->prix }}TND</h5>
                    </div>
                        <div class="btn-group">
                            <a href="{{route('voiture.edit',$voiture->id)}}"><button class="btn btn-success m-3">Modifier</button></a>
                            <form action="{{route('voiture.destroy',$voiture->id)}}"method="post">@csrf @method("delete")<button onclick="return confirm('êtes-vous sure de supprimer?')" class="m-3 btn btn-danger">Supprimer</button>
                            </form>
                            <a href="{{ route('reservation.create', $voiture->id) }}" class="btn btn-primary m-3">Réserver</a>

                        </div>
             </div>

        @endforeach
    </div>


  {{ $voitures->links() }}
@endsection
