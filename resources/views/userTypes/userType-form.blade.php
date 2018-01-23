@extends('userTypes/default')

@section('title')
  khr - Créer un nouveau type d'utilisateur 
@endsection

@section('content') 
	
	{!! Form::open(['url' => '/userTypes']) !!}
	
    Title : <input type="text" name="userType_title" /><br />
    <input type="submit" value="valider" />
	
	{!! Form::close() !!}
		
@endsection