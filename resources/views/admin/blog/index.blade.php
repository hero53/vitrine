@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-1 text-gray-800 text-center">Creation des differents article</h1>
    <p class="text-center">
        <a href="{{route('admin.create')}}" class="btn btn-primary mt-5">Créer un nouvelle article</a>
    </p>
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <p class="h2 text-center">liste des article</p>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>categorie</th>
                        <th>Date</th>
                        <th>voir</th>
                        <th>Modifier</th>
                        <th>supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article->title}}</td>
                            <td>{{$article->category->title}}</td>
                            <td>{{$article->created_at->formatLocalized('%d %B %Y')}}</td>
                            <td><a href="{{route('admin.show',$article)}}" class="btn btn-success btn-lg">voir</a></td>
                            <td><a href="{{route('admin.edit',$article)}}" class="btn btn-primary btn-lg">Modifier</a></td>
                            <td>
                                <form action="{{route('admin.destroy',$article)}}" method="post">
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