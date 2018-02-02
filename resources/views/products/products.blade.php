@extends('layouts.accueil')

@section('title', 'Nos produits')


@section('content')
<div class="pull-right">
    <a href="{{ url('/product/new') }}"><button class="btn btn-default">Ajouter un produit <i class="fa fa-plus"></i></button></a>
    <br><br>
    </div> 

<table class="table table-bordered table-hover">
    <thead class="bg-default">
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Image</th>
            <th>Fournisseur</th>
            <th>Commande</th>
            <th>Category</th>
            <th>Quantité</th>
            <th>Prix</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td><img src="/images/{{ $product->image }}" width="50"></td>
            <td>{{ $product->supplier_id }}</td>
            <td>{{ $product->supplier_order_id }}</td>
            <td>{{ $product->product_category_id }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->price }} XPF</td>
            <td>
                <a href="{{ url('/product/'.$product->id) }}"><button class="btn btn-default"><i class="fa fa-eye"></i></button></a>
                <a href="{{ url('/product/'.$product->id .'/edit') }}"><button class="btn btn-default"><i class="fa fa-pencil"></i></button></a>
                <a href=""><button class="btn btn-default"><i class="fa fa-trash"></i></button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $products->links() }}
@stop