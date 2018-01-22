




{!! Form::open(['url' => 'categories']) !!}

    <input type="text" name="nom" placeholder='nom'/>
    <select name="categorie">
        
     

        @foreach(App\categories::all() as $categorie)

        @if($categorie->parent_id == 0)
        <option value='{{$categorie->id}}'>{{ $categorie->nom }}</option>
        @endif
        @endforeach
        <option value='0'><b>PARENTS</b></option>
      
        
    </select>
    <input type="submit" value="valider"/>

    {!! Form::close() !!}