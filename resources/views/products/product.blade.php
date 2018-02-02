@extends('layouts.template')

@section('title')
{{ $product->name }}
@stop

@section('content')
    <h2 style="text-transform:uppercase;">{{ $product->name }}</h2>
        <div class="card">
            <div class="card-body">
            <img src="{{ $product->image }}">
                <p>Provient de chez {{ $product->supplier_id }} </p>
                <p>Commande : {{ $product->supplier_order_id }}</p>
                <p>Catégorie : {{ $product->product_category_id }}</p>
                <p>Quantité : {{ $product->quantity }}</p>
                <p>Prix : {{ $product->price }} XPF</p>
            </div>
        </div>


@stop