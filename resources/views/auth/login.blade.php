@extends('app')

@section('content')
<div class="login-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-sm-offset-8 col-md-4 col-md-offset-8 ">
                <img class="ers-logo img-responsive" src="{{asset('img/ERS-logo.png')}}" alt="">
            </div>
        </div>

        <div class="row">
            <h2 class="login-title">Report an issue?</h2>
        </div>

        <div class="row login-btn">
            <a href="{{url('login/facebook')}}" class="social-btn fb-btn">
                <i class="fa fa-facebook" aria-hidden="true"></i> Login with Facebook
            </a>
            <a href="#" class="social-btn tw-btn">
                <i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter
            </a>
        </div>
    </div>
</div>
@endsection
