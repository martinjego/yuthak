@extends('app')

@section('content')
<div id="map"></div>
<div class="default-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-sm-offset-8 col-md-4 col-md-offset-8 ">
                <img class="ers-logo img-responsive" src="{{asset('img/ERS-logo.png')}}" alt="">
            </div>
        </div>
        <div class="row user-profile">
            <img src="{{Auth::user()->avatar}}" class="img-circle" alt="">
            <h2 class="user-name">{{ Auth::user()->name}}</h2>
            <h4 class="text-center">You need to help someone?</h4>
            <div class="col-md-12">
                <a  href="#" class="btn btn-lg btn-primary btn-login">Report an incedent!</a>
            </div>
            <div class="col-md-12">
                <a href="{{ route('logout') }}" class="btn btn-lg btn-warning"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
