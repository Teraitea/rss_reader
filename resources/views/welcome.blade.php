@extends('layouts.welcomepage')

@section('title', 'Bienvenue sur FeedSpeed')

@section('content')
<div class="text-center mt-5 content-teraitea">
  <div class="text-center mt-5">
    <img src="{{ url('images/logofeedsspeed-white.png') }}">
    <div>
        <a href="{{ route('register') }}"><button class="btn btn-lg btn-default">S'incrire</button></a>
        <a href="{{ route('login') }}"><button class="btn btn-lg btn-default">Se connecter</button></a>
    </div>
  </div>
</div>
@stop