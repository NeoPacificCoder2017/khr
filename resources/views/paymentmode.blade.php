@extends('template')

@section('contenu')
<h2>PaymentMode Database</h2>
  <div  ng-controller="PaymentModeController">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Created_at</th>
          <th>Upadate_at</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="payment_modes">
          <td>{{ payment_mode.id }}</td>
          <td>{{ payment_mode.name }}</td>
          <td>{{ payment_mode.timestamps }}</td>
          <td>
            <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', payment_modes.id)">Edit</button>
            <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(payment_modes.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>  
@endsection