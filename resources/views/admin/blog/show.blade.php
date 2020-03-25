@extends('layouts.admin',['title'=>' Actualité description'])

@section('content')
    <h1 class="text-center">information Article</h1>
    <div class="jumbotron">
        <h1 class="display-4">Titre: {{$articles->title}}</h1>
        <hr class="my-4">
          <p>{!!$articles->article!!} </p>
        <a class="btn btn-primary btn-lg" href="{{route('admin.view')}}" role="button">article</a>
    </div>
@endsection