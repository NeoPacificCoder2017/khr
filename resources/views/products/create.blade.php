
@extends('layouts.template')

@section('content')
<div class="container">
  <h2>Stacked form</h2>
  <form action="/action_page.php">

    <div class="form-group">
      <label for="name">Nom:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>

    <div class="form-group">
      <label for="image">image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
    </div>

    <div class="form-group">
      <label for="Fournisseur">Fournisseur:</label>
      <input type="number" class="form-control" id="supplier_id" placeholder="Enter supplier_id" name="supplier_id">
    </div>

    <div class="form-group">
      <label for="Commande">Commande:</label>
      <input type="number" class="form-control" id="supplier_order_id" placeholder="Enter supplier_order_id" name="supplier_order_id">
    </div>

    <div class="form-group">
      <label for="Catégorie">Catégorie:</label>
      <input type="number" class="form-control" id="product_category_id" placeholder="Enter product_category_id" name="product_category_id">
    </div>

    <div class="form-group">
      <label for="quantity">Quantité:</label>
      <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity">
    </div>

    <div class="form-group">
      <label for="price">Prix:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>
    

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
  </form>
</div>
@stop
