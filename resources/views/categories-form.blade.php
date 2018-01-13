<form>
    {{ csrf_field() }}

    <input type="text" name="nom" placeholder='nom'/>
    <select>
        <option value='legume'>Légumes</option>
        <option value='fruit'>Fruits</option>
        <option value='parent'>Parent</option>
    </select>
    <input type="submit" value="valider"/>

</form>