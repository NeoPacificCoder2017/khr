

{!! Form::open(['url' => 'categories']) !!}

    <input type="text" name="nom" placeholder='nom'/>
    <select name="selection">
        <option value="1">Légumes</option>
        <option value="2">Fruits</option>
        <option name="parent" value='0'>Parent</option>
    </select>
    <input type="submit" value="valider"/>

    {!! Form::close() !!}