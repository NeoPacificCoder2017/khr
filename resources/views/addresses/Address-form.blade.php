{!! Form::open(['url' => 'addresses', 'method' => 'POST']) !!}

User :                      <input id="user" type="text" name="user_id" value= "{{ $address->user_id }}" /> <br/>
shipping :                <input type="text" name="shipping" value="{{ $address->shipping }}" /> <br/>
billing :                    <input type="text" name="billing" value="{{ $address->billing }}" /> <br/>
firstname:               <input type="text" name="firstname" value="{{ $address->firstname }}" /> <br/>
lastname:               <input type="text" name="lastname" value="{{ $address->lastname }}" /> <br/>
company_name:    <input type="text" name="company_name" value="{{ $address->company_name }}" /> <br/>
adress_line_1:       <input type="text" name="address_line_1" value="{{ $address->address_line_1 }}" /> <br/>
adress_line_2:       <input type="text" name="address_line_2" value="{{ $address->address_line_2 }}" /> <br/>
island_id:               <input type="text" name="island_id" value="{{ $address->island_id }}" /> <br/>
city_id:                   <input type="text" name="city_id" value="{{ $address->city_id }}" /> <br/>
telephone:             <input type="tel" name="telephone" value="{{ $address->telephone }}" /> <br/>
email:                    <input type="email" name="email" value="{{ $address->email }}" /> <br/>

    <input type="submit" value="Valider" />
    
{!! Form::close() !!}