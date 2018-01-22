{!! Form::open(['url' => 'addresses', 'method' => 'POST']) !!}

User :                      <input id="user" type="text" name="user_id" value="" /> <br/>
shipping :                <input type="text" name="shipping" value="" /> <br/>
billing :                    <input type="text" name="billing" value="" /> <br/>
firstname:               <input type="text" name="firstname" value="" /> <br/>
lastname:               <input type="text" name="lastname" value="" /> <br/>
company_name:    <input type="text" name="company_name" value="" /> <br/>
adress_line_1:       <input type="text" name="address_line_1" value="" /> <br/>
adress_line_2:       <input type="text" name="address_line_2" value="" /> <br/>
island_id:               <input type="text" name="island_id" value="" /> <br/>
city_id:                   <input type="text" name="city_id" value="" /> <br/>
telephone:             <input type="tel" name="telephone" value="" /> <br/>
email:                    <input type="email" name="email" value="" /> <br/>

    <input type="submit" value="Valider" />
    
{!! Form::close() !!}