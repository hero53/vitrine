@extends('layouts.admin')

@section('content')
    <p class="text-center">Liste des messages</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Voir message</th>
                        <th>supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->contact}}</td>
                            <td>{{$contact->email}}</td>
                            <td><a href="{{route('mail.show',$contact)}}" class="btn btn-primary">Voir message</a></td>
                            <td>
                                <form action="{{route('mail.destroy',$contact)}}" method="post">
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