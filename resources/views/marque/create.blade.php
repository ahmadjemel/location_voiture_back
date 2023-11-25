@extends("layouts.template")



@section("content")
<div class="card card-primary ">
    @section("title","Ajouter Marque")
    @if($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
 <form action="{{route('marque.store')}}" method="post">
 @csrf


     <div class="card-body ">
        <div class="mb-3 col-sm-3">
           <label class="label-control  mb-3 " for="nom">Marque</label>
           <input class="form-control mb-3" type="text" id="nom" name="nom" required onkeyup="this.value = this.value.toUpperCase();" placeholder="nom">
        </div>
        <div class="mb-3 col-sm-3 ">
            <button class=" btn btn-primary text-center">Ajouter</button>
        </div>
    </div>



</div>
</form>
@endsection
