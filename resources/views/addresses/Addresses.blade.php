@foreach( $addresses as $address):
    <tr>
            <td> {{$address->user_id}} </td>
            <td> {{$address->shipping}} </td>
            <td> {{$address->billing}} </td>
            <td> {{$address->firstname}} </td>
            <td> {{$address->lastname}} </td>
            <td> {{$address->company_name}} </td>
            <td> {{$address->address_line_1}} </td>
            <td> {{$address->address_line_2}} </td>
            <td> {{$address->island_id}} </td>
            <td> {{$address->city_id}} </td>
            <td> {{$address->telephone}} </td>
            <td> {{$address->email}} </td>
    </tr>
@endforeach