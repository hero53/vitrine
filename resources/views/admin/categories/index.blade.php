@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-1 text-gray-800 text-center">Creation des differents categorie de blog</h1>
    <p class="text-center">
        <a href="{{route('categories.create')}}" class="btn btn-primary mt-5">Créer un type de categorie</a>
    </p>
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <p class="h2 text-center">liste des categorie</p>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->title}}</td>
                            <td>{{$category->description}}</td>
                            <td>
                                <form action="{{route('categories.destroy',$category)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" class="btn btn-danger " value="supprimer">
                                </form>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection