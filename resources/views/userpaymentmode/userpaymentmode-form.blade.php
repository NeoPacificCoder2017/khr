{!! Form::open(['url' => 'userpaymentmodes']) !!}
  User Id : <input type='text' name='user_id' placeholder='Utilisateur'/><br/>
  Payment_mode_id : <input type='text' name='payment_mode_id' placeholder='Paiement'/>
  <input type='submit' name='valider'/>
{!! Form::close() !!}