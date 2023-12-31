@extends("layouts.template")


@section("content")

@section("title","Ajouter Client")

<br>
<form action="{{route('client.store')}}" method="post">
@csrf

<div class="card-body row">
     <div class="mb-3 col-sm-3">
        <label class="label-control  mb-3" for="cin">CIN</label>
        <input class="form-control mb-3" type="text" placeholder="cin" name="cin" id="cin">
     </div>

     <div class="mb-3 col-sm-3">
        <label class=" container label-control mb-3"  for="nom">Nom</label>
        <input class="form-control mb-3" type="text"placeholder="nom" name="nom"id="nom" >
     </div>

     <div class="mb-3 col-sm-3">
        <label class=" container label-control mb-3"  for="prenom">Prenom</label>
        <input class="form-control mb-3" type="text"placeholder="prenom" name="prenom"id="prenom">
     </div>


     <div class="mb-3 col-sm-3">
        <label class=" container label-control mb-3"  for="tel">Télèphone</label>
        <input class="form-control mb-3" type="text"placeholder="tel"name="tel" id="tel">
     </div>

     <div class="mb-3 col-sm-3">
        <label class=" container label-control mb-3"  for="email">Email</label>
        <input class="form-control mb-3" type="email"placeholder="email" name="email" id="email" >
     </div>

   

</div>
<div class="text-center me-3">
    <button class="w-50 btn btn-primary text-center">Ajouter</button>
  </div>
</form>
@endsection
