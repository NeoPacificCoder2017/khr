@extends('suppliers.default')

@section('title')
  liste des fournisseurs
@endsection

@section('content')   
  <div>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>ID</th>
        <th>name</th>
        <th>First_name</th>
        <th>Email</th>

      </tr>
      </thead>
      <tbody>
      @foreach($suppliers AS $supplier)
      <tr>
      <td>{{ $supplier->id}}</td>
      <td>{{ $supplier->name}}</td>
      <td>{{ $supplier->first_name}}</td>
      <td>{{ $supplier->email}}</td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection