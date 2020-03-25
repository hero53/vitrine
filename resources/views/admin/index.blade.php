@extends('layouts.admin',['title'=>'administration'])
@section('content')
   <div class="text-center h3">Bienvenu dans l’administration de BHEX</div>
   <div class="row mt-5">
   	<div class="col-md-6 offset-3">
   		<div class="row">
   			<div class="col-md-6">
	   			<a class="btn btn-primary btn-lg" href="{{route('mail.index')}}">
					<p class="text-center">
						<i class="fas fa-envelope"></i>
					</p>
	             <span class="h3"> voir les messages</span>
	            </a>
   			</div>
   			<div class="col-md-6">
               <a class="btn btn-primary btn-lg" href="{{route('admin.view')}}">
                  <span class="h3"> Créer un nouvel évenement </span>
               </a>
   			</div>
   		</div>
   	</div>
   </div>

@endsection