@extends("layouts.template")
@section('title'," Ajouter employeurs")


@section("content")

<div class="container">
    <div class="card card-primary ">

        <form action="{{route('employe.store')}}" method="post">
        @csrf
            <div class= "card-body  row">
                <div class="mb-3 col-sm-3">
                <label class="label-control  mb-3 " for="cin">CIN</label>
                <input class="form-control mb-3" type="text" id="cin" name="cin" required placeholder="cin">
                </div>
            <div class="mb-3 col-sm-3">
                    <label class="label-control  mb-3 " for="nom">Nom</label>
                    <input class="form-control mb-3" type="text" id="nom" name="nom" required placeholder="nom">
                </div>

                <div class="mb-3 col-sm-3">
                    <label class="label-control  mb-3 " for="prenom">Prenom</label>
                    <input class="form-control mb-3" type="text" id="prenom" name="prenom" required placeholder="prenom">
                </div>

                    <div class="mb-3 col-sm-3">
                        <label class="label-control  mb-3 " for="post">Tél.</label>
                        <input class="form-control mb-3" type="text" id="tel" name="tel" required placeholder="tel">
                    </div>

                <div class="mb-3 col-sm-3">
                    <label class="label-control  mb-3 " for="post">Poste</label>
                    <input class="form-control mb-3" type="text" id="post" name="post" required placeholder="post">
                </div>
            <div class="mb-3 col-sm-3">
                    <label class="label-control  mb-3 " for="salaire">Salaire</label>
                    <input class="form-control mb-3" type="text" id="salaire" name="salaire" required placeholder="salaire">
            </div>

                <div class="mb-3 col-sm-3">
                    <label class="label-control  mb-3 " for="email">Email</label>
                    <input class="form-control mb-3" type="text" id="email" name="email" required placeholder="email">
                </div>
            <div class="mb-3 col-sm-3">
                    <label class="label-control  mb-3 " for="password">Password</label>
                    <input class="form-control mb-3" type="password" id="password" name="password" required placeholder="password">
                </div>
                <div class="text-center me-3 ">
                    <button class="w-100 btn btn-primary text-center">Ajouter</button>
                </div>
        </div>
     </form>
    </div>
</div>

@endsection
