@extends("layouts.template")
@section('content')

<div class="card card-primary ">

    <form action="{{route('employe.store')}}" method="post">
    @csrf


        <div class="card-body row">
           <div class="mb-3 col-sm-3">
              <label class="label-control  mb-3 " for="cin">CIN</label>
              <input class="form-control mb-3" type="text" id="cin" name="cin"value="{{$employe->cin}}" required placeholder="cin">
           </div>

       </div>

           <div class="card-body row">
               <div class="mb-3 col-sm-3">
               <label class="label-control  mb-3 " for="nom">Nom</label>
               <input class="form-control mb-3" type="text" id="nom" name="nom"value="{{$employe->nom}}" required placeholder="nom">
               </div>
           </div>
           <div class="card-body row">
               <div class="mb-3 col-sm-3">
               <label class="label-control  mb-3 " for="prenom">Preom</label>
               <input class="form-control mb-3" type="text" id="prenom" name="prenom"value="{{$employe->prenom}}" required placeholder="prenom">
               </div>
           </div>
            <div class="card-body row">
               <div class="mb-3 col-sm-3">
               <label class="label-control  mb-3 " for="post">Tél.</label>
               <input class="form-control mb-3" type="text" id="tel" name="tel"value="{{$employe->tel}}" required placeholder="tel">
               </div>
           </div>
           <div class="card-body row">
               <div class="mb-3 col-sm-3">
               <label class="label-control  mb-3 " for="post">Poste</label>
               <input class="form-control mb-3" type="text" id="post" name="post"value="{{$employe->post}}" required placeholder="post">
               </div>
           </div>
           <div class="card-body row">
               <div class="mb-3 col-sm-3">
               <label class="label-control  mb-3 " for="salaire">Salaire</label>
               <input class="form-control mb-3" type="text" id="salaire" name="salaire"value="{{$employe->salaire}}" required placeholder="salaire">
               </div>
           </div>
           <div class="card-body row">
               <div class="mb-3 col-sm-3">
               <label class="label-control  mb-3 " for="email">Email</label>
               <input class="form-control mb-3" type="text" id="email" name="email"value="{{$employe->email}}"required placeholder="email">
               </div>
           </div>
           <div class="card-body row">
               <div class="mb-3 col-sm-3">
               <label class="label-control  mb-3 " for="password">Password</label>
               <input class="form-control mb-3" type="password" id="password" name="password"value="{{$employe->password}}" required placeholder="password">
               </div>
           </div>




           <div class="text-center me-3 ">
            <button class="w-100 btn btn-primary text-center">Valider</button>
        </div>
       </form>

   </div>

@endsection
