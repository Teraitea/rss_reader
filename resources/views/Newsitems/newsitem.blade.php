@extends('layouts.app')

@section('content')
<div class="container">

        
        <h1>{{ $newsitem->title }}</h1>
        <p>{{ $newsitem->description }}</p>
        <a href="{{ $newsitem->link }}">{{$newsitem->link}}</a><br>
        {{ $newsitem->pubdate }}
        <br>
        <a href="{{ action('NewsitemController@show', $newsitem['id']) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
        <a href="{{ action('NewsitemController@edit', $newsitem['id']) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
        <a href="{{ action('NewsitemController@destroy', $newsitem['id']) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        

</div>
@endsection