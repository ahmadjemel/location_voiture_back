@extends("layouts.template")


@section("content")

    <div class="form-group mb-3 bg-info text-center"   >
        <h1 >Modifier marque</h1>
    </div>

    <br>
  <form action="{{route('marque.update',$marque->id)}}" method="post">
        @csrf
        @method("put")
      <div class="container">

         <div class="card-body ">
                <div class="mb-3 col-sm-3">
                <label class="label-control  mb-3 " for="nom">Marque</label>
                <input class="form-control mb-3" type="text" name="nom" value="{{$marque->nom}}"required id="nom">
                </div>


                <div class="mb-3 col-sm-3">
                    <button class="btn btn-info">Valider</button>
                    
                </div>
            </div>
      </div>
 </form>
@endsection
