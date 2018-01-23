
</br>
Action :
<select>
    <option>Delete</option>
    <option>Update</option>
</select>

</br></br>

<table>
    <tr>
        <th></th>
        <th>id</th>
        <th>title</th>
        <th>prop2</th>
        <th calspan="2">Actions</th>
    </tr>
    <tr>
        
        @foreach(App\categories::all() as $categorie)
            <tr>
            <td><input type="checkbox"/></td>
            <td>{{$categorie -> id}}</td>
            <td>{{$categorie -> nom}}</td>
            <td>mon prop2</td>
            <td><button>Delete</button></td>
            <td><button>Update</button></td>
            </tr>
        @endforeach    

       

    </tr>
</table>
</html>