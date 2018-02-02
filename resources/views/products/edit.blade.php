
@extends('layouts.template')

@section('content')
<div class="container">
  <h2>Stacked form</h2>
  <form action="/action_page.php">

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
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
