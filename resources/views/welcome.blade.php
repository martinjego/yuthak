@extends('app')

@section('content')
     <div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Login</h2>
      <hr>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" /><br>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/><br> 
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me<hr>
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
    </div>
@endsection
