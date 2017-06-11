@extends('app')

@section('content')
     <div class="wrapper">
    <form class="form-signin">
      <h2 class="form-signin-heading">Login</h2>
      <hr>
      <a class="btn btn-lg btn-primary btn-block" href="{{url('login/facebook')}}">Login with facebook</a>
    </div>
@endsection
