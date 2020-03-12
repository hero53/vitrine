@extends('layouts.admin')

@section('content')
    <h1 class="text-center">information Article</h1>
    <div class="jumbotron">
        <h1 class="display-4">Titre: {{$articles->title}}</h1>
        <p class="lead">Categorie: {{$articles->category->title}}</p>
        <hr class="my-4">
        <p class="lead">Message</p>


        <p>{{$articles->article}} </p>
        <a class="btn btn-primary btn-lg" href="{{route('admin.view')}}" role="button">article</a>
    </div>
@endsection