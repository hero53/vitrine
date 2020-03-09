@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-1 text-gray-800 text-center">Creation des differents article</h1>
    <p class="text-center">
        <a href="{{route('admin.blog.create')}}" class="btn btn-primary mt-5">Créer un nouvelle article</a>
    </p>
    <p class="mb-4">Bootstrap's default utility classes can be found on the official
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur perspiciatis repudiandae vel. <br>
        A ad atque eos fugit id maxime molestias nesciunt, quia repellendus, reprehenderit sed tempora ullam unde
        ut voluptatibus.
    </p>
@endsection