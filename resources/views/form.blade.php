@extends('template')


@section('contenu')
<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
    <div class="panel-heading">Ajouter un nouveau moyen de paiement</div>
      <div class="panel-body"> 
      {!! Form::open(['url' => 'products']) !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Votre moyen de paiement']) !!}<br/>
        {!! Form::file('image', null, ['class' => 'form-control']) !!}<br/>
        {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}<br/>
      {!! Form::close() !!}
      </div>
  </div>
</div>
@endsection