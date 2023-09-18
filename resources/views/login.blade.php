@extends('master') 
@section ('content')

<!-- class custom-login made to apply css for height -->
<div class="container custom-login">
    <div class="row">
        <!-- col-sm-offset-4"   to bring form in center -->
        <div class="col-sm-4 col-sm-offset-4">
        <form action="login" method="POST">
  <div class="form-group">
    <!-- csrf token / search why it is used -->
    @csrf
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form> 
        </div>
    </div>
</div>

@endsection
