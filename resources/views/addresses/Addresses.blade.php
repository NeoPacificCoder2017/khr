@extends('../template')
@section('contenu')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th> user_id </th>
            <th> shipping </th>
            <th> billing </th>
            <th> firstname </th>
            <th> lastname </th>
            <th> company_name </th>
            <th> address_line_1 </th>
            <th> address_line_2 </th>
            <th> island_id </th>
            <th> city_id </th>
            <th> telephone </th>
            <th> email </th>
        </tr>
    </thead>
    <tbody>
        @foreach( $addresses as $address)
        <tr>
            <td> {{ $address->user_id }} </td>
            <td> {{ $address->shipping }} </td>
            <td> {{ $address->billing }} </td>
            <td> {{ $address->firstname }} </td>
            <td> {{ $address->lastname }} </td>
            <td> {{ $address->company_name }} </td>
            <td> {{ $address->address_line_1 }} </td>
            <td> {{ $address->address_line_2 }} </td>
            <td> {{ $address->island_id }} </td>
            <td> {{ $address->city_id }} </td>
            <td> {{ $address->telephone }} </td>
            <td> {{ $address->email }} </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop