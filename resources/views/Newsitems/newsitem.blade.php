@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel panel-default">
  <div class="panel-heading">
        <h1 style="text-decoration: underline;">{{ $newsitem->title }}</h1> 
        
        <div class="pubdate mt-5">Date de publication : {{ $newsitem->pubdate }}</div>
        </div>
  <div class="panel-body">
          <div class="description">{!! htmlspecialchars_decode($newsitem->description, ENT_COMPAT | ENT_HTML401) !!}</div>
          
        <button class="btn"><a href="{{ $newsitem->link }}" class="link">Visit website</a></button><br />
  </div>
</div>

  <a href="{{ action('HomeController@index') }}" class="btn btn-success pull-left">Back <i class="fa fa-caret-square-o-left"></i></a>


</div>
@endsection