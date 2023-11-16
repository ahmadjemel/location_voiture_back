@extends("layouts.template")

@section("title","Liste de Marque")


@section("content")



    <!-- /.card-header -->
    <div class="container ">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a href="{{route('marque.create')}}"class="btn btn-primary me-md-2">Ajouter une marque</a>
        </div>
        <!-- Main content -->
            <section class="container">
                    <table id="example1" class="table table-bordered table-striped ">
                        <thead>
                            <tr style="text-align: center">
                                <th style="width: 40px">ID</th>
                                <th style="width: 200px">Nom</th>
                                <th style="width: 20%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($marques as $marque )
                                <tr style="text-align: center">
                                    <td>{{$marque->id}}</td>
                                    <td>{{$marque->nom}}</td>
                                    <td>
                                        <a href="{{route('marque.edit',$marque->id)}}">
                                            <button class="btn btn-primary">Edit</button>
                                        </a>
                                        <form class="d-inline m-2 " action="{{route('marque.destroy',$marque->id)}}"method="post">
                                            @csrf
                                            @method("delete")
                                            <button class="btn btn-danger"onclick="return confirm('êtes-vous sure de supprimer?')">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <th colspan="9"@class(['text-center','p-2', 'font-bold' => true])>pas de marque</th>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot style="text-align: center">
                            <tr>
                                <th>id</th>
                                <th>Marque</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                </div>
            </section>
    </div>
  @endsection
