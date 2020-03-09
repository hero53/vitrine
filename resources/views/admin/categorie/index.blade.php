@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-1 text-gray-800 text-center">Creation des differents categorie de blog</h1>
    <p class="text-center">
        <a href="{{route('categorie.create')}}" class="btn btn-primary mt-5">Créer un type de categorie</a>
    </p>
    <p class="mb-4">Bootstrap's default utility classes can be found on the official
        <a href="https://getbootstrap.com/docs">Bootstrap Documentation</a> page. The custom utilities
        below were created to extend this theme past the default utility classes built into Bootstrap's framework.
    </p>
@endsection