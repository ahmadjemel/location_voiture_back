@extends("layouts.template")


@section("content")
<div class="card card-primary ">
    @section("title","Ajouter voiture")
    <form action="{{route('voiture.store')}}" method="post" enctype="multipart/form-data">
 @csrf

 <div class="card-body"id>
    <div class="card-body row">
     <div class="mb-3 col-sm-3">
        <label class="label-control  mb-3 " for="matricule">Matricule</label>
        <input class="form-control mb-3" type="text" name="immatricule"onkeyup="this.value = this.value.toUpperCase();" required placeholder="matricule">
     </div>



        <div class="mb-3 col-sm-3">
           <label class="label-control mb-3 " for="marque_id">Marque</label>
           <select class="form-control mb-3" id="marque_id" name="marque_id" required placeholder="marque">
                <option value="">----Choisir Marque----</option>
                @foreach ($marques as $marque )
                 <option value="{{$marque->id}}">{{$marque->nom}}</option>
                @endforeach
            </select>

        </div>
        <div class="mb-3 col-sm-3">
            <label class="label-control mb-3 " for="modele">modele</label>
            <input class="form-control mb-3" id="modele" name="modele" required onkeyup="this.value = this.value.toUpperCase();" placeholder="modele">
        </div>

     <div class="mb-3 col-sm-3">
        <label class=" container label-control mb-3"  for="nbr de place">Nbr de place</label>
        <input class="form-control mb-3" type="text" name="nbr_place" placeholder="nbr de place">
     </div>
     <div class="mb-3 col-sm-3">
        <label class=" container label-control mb-3"  for="nbr de porte">Nbr de porte</label>
        <input class="form-control mb-3" type="text" required name="nbr_port" placeholder="nbr de porte">
     </div>



     <div class="mb-3 col-sm-3">
        <label class=" container label-control mb-3"  for="nbr de cv">Nbr de CV</label>
        <input class="form-control mb-3" type="text"required name="nbr_CV" placeholder="nbr de cv">
     </div>

     <div class="mb-3 col-sm-3">
        <label class=" container label-control mb-3"  for="kilometrage">Kilométrage</label>
        <input class="form-control mb-3" type="text" required name="kilometrage" placeholder="kilometrage">
     </div>


     <div class="mb-3 col-sm-3 ">
                    <label class=" container label-control mb-3" for="carburant">Carburant</label>
                    <select class="form-control mb-3" id="carburant" name="carburant" required>
                        <option value="">----Choisir Carburant----</option>
                        <option value="diesel">Diesel</option>
                        <option value="essence">Essence</option>
                    </select>
     </div>
     <div class="mb-3 col-sm-3 ">
        <label class=" container label-control mb-3" for="status">Status</label>
        <select class="form-control mb-3" id="status" name="status" required>
            <option value="disponible" id="disponible">0</option>
            <option value="reserver" id="reserver">1</option>
        </select>
</div>
   <div class="mb-3 col-sm-3">
        <label class="container label-control mb-3 " for="photo">Photo</label>
        <input  type="file" class="form-control " name="photo" id="photo">
      </div>

      <div class="mb-3 col-sm-3">
        <label class="container label-control mb-3 " for="prix">Prix</label>
        <input  type="text" class="form-control " name="prix" id="prix">
      </div>
         <div class=" container">
          <button class=" btn btn-primary ">Ajouter</button>
         </div>


    </div>
</div>
</form>

@endsection
