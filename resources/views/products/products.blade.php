@extends('layouts.template')

@section('title', 'Nos produits')

@section('content')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Image</th>
            <th>Fournisseur</th>
            <th>Commande</th>
            <th>Category</th>
            <th>Quantité</th>
            <th>Prix</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->image }}</td>
            <td>{{ $product->supplier_id }}</td>
            <td>{{ $product->supplier_order_id }}</td>
            <td>{{ $product->product_category_id }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ url('/product/'.$product->id) }}"><button class="btn btn-default"><i class="fa fa-eye"></i></button></a>
                <a href=""><button class="btn btn-default"><i class="fa fa-pencil"></i></button></a>
                <a href=""><button class="btn btn-default"><i class="fa fa-trash"></i></button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $products->links() }}
@stop