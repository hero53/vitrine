@extends('layouts.admin',['title'=>' Actualité liste'])

@section('content')
    <h1 class="h3 mb-1 text-gray-800 text-center">Creation des differents évènements </h1>
    <p class="text-center">
        <a href="{{route('admin.create')}}" class="btn btn-primary mt-5">Créer un nouvel évènement</a>
    </p>
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <p class="h2 text-center"><u>liste des évènements</u> </p>
                @if(! $articles->isEmpty())
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Date</th>
                        <th>voir</th>
                        <th>supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article->title}}</td>
                            <td>{{$article->created_at->formatLocalized('%d %B %Y')}}</td>
                            <td><a href="{{route('admin.show',$article)}}" class="btn btn-success btn-lg">voir</a></td>
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
             @else
                <p class="text-center h4">Vous n'avez pas encore évènements </p>
             @endif
            </div>
        </div>
    </div>
@endsection