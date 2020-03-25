@extends('layouts.admin',['title'=>' Actualité création'])

@section('content')

    <h1 class="h3 mb-1 text-gray-800 text-center">Créer un article</h1>
    <div class="row">
        <div class="col-sm-12 col-md-10 offset-1">
            <form method="POST" action="{{route('admin.store')}}" class="mt-5 mb-5" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">titre</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Photo article</label>
                    <input type="file" class="" name="img">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Article</label>
                    <textarea rows="22" class="form-control" name="article" data-plugin="summernote" id="summernote" ></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Céer un article</button>
            </form>
        </div>
    </div>
@endsection
