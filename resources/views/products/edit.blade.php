
@extends('layouts.template')

@section('title', 'Ajouter un produit')
@section('content')

    <div class="container">
    <span class="anchor" id="formUserEdit"></span>

    <form class="form" method="post" enctype="multipart/form-data" action="{{action('ProductController@update', $product->id)}}">
    {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Produit :</label>
                <div class="col-lg-9">
                    <input name="name" class="form-control" type="text" value="{{ $product->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">image :</label>
                <div class="col-lg-9">
                    <input name="image" class="" type="file" value="{{ $product->image }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Fournisseur :</label>
                <div class="col-lg-9">
                    <input name="supplier_id" class="form-control" type="number" value="{{ $product->supplier_id }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Commande :</label>
                <div class="col-lg-9">
                    <input name="supplier_order_id" class="form-control" type="number" value="{{ $product->supplier_order_id }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Catégorie :</label>
                <div class="col-lg-9">
                    <input name="product_category_id" class="form-control" type="number" value="{{ $product->product_category_id }}">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Quantité :</label>
                <div class="col-lg-9">
                    <input name="quantity" class="form-control" type="number" value="{{ $product->quantity }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Prix :</label>
                <div class="col-lg-9">
                    <input name="price" class="form-control" type="number" value="{{ $product->price }}">
                </div>
            </div>
            
            
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                    <input type="reset" class="btn btn-default" value="Cancel">
                    <input type="submit" class="btn btn-default" value="Save Changes">
                </div>
            </div>
        </form>
    </div>
<!-- /form user info -->

@stop
