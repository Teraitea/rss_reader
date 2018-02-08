@extends('layouts.app')

@section('title')
  {{ $newsitem->title }}
@stop
@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="jumbotron ">
      <h1 style="text-decoration: underline;">{{ $newsitem->title }}</h1> 
      <div class="pubdate">Date de publication : {{ \Carbon\Carbon::parse($newsitem->pubdate)->format('d/m/Y h:i')}}</div>
    </div>
    <div class="card-body">
      <div class="description">{!! htmlspecialchars_decode($newsitem->description, ENT_COMPAT | ENT_HTML401) !!}</div>
      <button class="btn btn-default mt-2"><a href="{{ $newsitem->link }}" class="link">Visit website</a></button><br />
    </div>
  </div>
</div>
@endsection