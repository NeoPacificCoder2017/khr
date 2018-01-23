@extends('template')

@section('contenu')
<h2>KAI HOTU RAU-Moyen de paiement</h2>
  <div class="col-sm-offset-3 col-sm-6">
	  <div class="panel panel-info">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach($paymentmode AS $paymentmodes)
            <tr>
              <td>{{ $paymentmodes->id }}</td>
              <td>{{ $paymentmodes->name }}</td>
                <td>
                  <a href="paymentmode/{{$payment->id}}/edit')}}" button class="btn btn-default btn-small btn-detail"><span class="glyphicon glyphicon-eye-open"></span></a>
                  <a href="paymentmode/{{$payment->id}}/delete" button class="btn btn-danger btn-small btn-delete"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection