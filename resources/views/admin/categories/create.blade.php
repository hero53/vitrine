@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-1 text-gray-800 text-center">Créer une categorie de blog</h1>
    <div class="card shadow mb-4">


        <div class="row">
            <div class="col-sm-12 col-md-6 offset-3">
                <form method="POST" action="{{route('categories.store')}}" class="mt-5 mb-5">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Libellé</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea rows="2" class="form-control" name="description"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg">Céer une nouvelle categorie</button>
                </form>
            </div>
        </div>


    </div>
@endsection