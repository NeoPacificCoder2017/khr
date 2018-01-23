@extends('userTypes/default')

@section('title')
  khr - Tous les types d'utilisateur 
@endsection

@section('content')   
  <div>
		<table>
			<caption>Liste des types d'utilisateur</caption>
			<div>
				<label for="userType_actions">Actions:</label>
        <select name="userType_actions">
					<option value=""></option>
					<option value="deleteAll">Delete all</option>
					<option value="selectAll">Select all</option>
				</select>
				<a href="{{action('userTypeController@new')}}"><button type="button" class="btn btn-primary btn-sm">New</button></a>
			</div>
			<thead>
				<tr>
					<th></th>
					<th>id</th>
					<th>titre</th>
					<th>créé le</th>
					<th>modifié le</th>
					<th>actions</th>
				</tr>
			</thead>
			<tbody>

		@foreach($userTypes as $userType)
			<tr>
				<td><input type="checkbox" /></td>
				<td>{{$userType->id}}</td>
				<td>{{$userType->title}}</td> 
				<td>{{$userType->created_at}}</td>
				<td>{{$userType->updated_at}}</td>
				<td><a href=""><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
						<a href=""><button type="button" class="btn btn-primary btn-sm">Delete</button></a></td>
			</tr>
		@endforeach
		</tbody>
   </table>
  </div>
@endsection