@extends("layouts.template")


@section("content")

<div class="form-group mb-3 bg-info text-center"   >
    <h1 >Modifier voiture</h1>
</div>

<br>
<form action="{{route('voiture.update',$voiture->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method("put")


    <div class="card-body row">
        <div class="mb-3 col-sm-3">
            <label class="label-control mb-3 " for="marque_id">Marque</label>
            <select class="form-control mb-3" id="marque_id" name="marque_id" required placeholder="marque">
                 <option value="">----Choisir Marque----</option>
                 @foreach ($marques as $marque )
                  <option value="{{$marque->id}}"@if($marque->id==$voiture->marque_id)selected @endif>{{$marque->nom}}</option>
                 @endforeach
             </select>
        </div>

        <div class="mb-3 col-sm-3">
            <label class="label-control mb-3 " for="prix">Prix</label>
            <input class="form-control mb-3" id="prix" name="prix" required value="{{$voiture->prix}}" placeholder="prix">
        </div>

        <div class="mb-3 col-sm-3">
            <label class=" container label-control mb-3"  for="kilometrage">Kilométrage</label>
            <input class="form-control mb-3" type="text" required name="kilometrage" value="{{$voiture->kilometrage}}"placeholder="kilometrage">
        </div>

        <div class="mb-3 col-sm-3">
            <label class="container label-control mb-3 " for="photo">Photo</label>
            <input  type="file" class="form-control " name="photo" value="{{$voiture->photo}}"id="photo">
        </div>




        <div class="col-m-3">
            <button class="btn btn-info">Valider</button>
            <a href="{{route('voiture.index')}}" class=" btn btn-danger">Annullé</a>

        </div>

    </div>

</form>
@endsection
