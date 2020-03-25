@extends('layouts.admin',['title'=>' Mail description'])

@section('content')
    <h1 class="text-center">information</h1>
    <div class="jumbotron">
        <h1 class="display-4">{{$contacts->name}}</h1>
        <p class="lead">Contact: {{$contacts->contact}}</p>
        <p class="lead">Contact: {{$contacts->email}}</p>
        <hr class="my-4">

        <p>{{$contacts->msg}} </p>
        <a class="btn btn-primary btn-lg" href="{{route('mail.index')}}" role="button">Messagerie</a>
    </div>
@endsection