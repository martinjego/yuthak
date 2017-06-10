@extends('app')

@section('content')
    <div id="app">
        <router-link to="/">Home</router-link>
        <router-link to="/dashboard">Dashboard</router-link>
        <router-view></router-view>
    </div>
@endsection
