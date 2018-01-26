@extends('layouts.app')

@section('content')
<div class="container-fluid">

@if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
    @endif
    <a href="{{ url('/home/rssfeeds/new') }}" class="btn btn-success pull-right">Ajouter un flux RSS <i class="fa fa-rss"></i></a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <!-- <th>User ID</th> -->
            <th>Titre de l'article</th>
            <th>Lien de l'article</th>
            {{-- <th>Rss Feed ID</th> --}}
            {{-- <th>Category ID</th> --}}
            <th>Date de publication</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($newsitems as $newsitem)
        <tr>
            <td>{{ $newsitem->id }}</td>
            <!-- <td>{{ $newsitem->user_id }}</td> -->
            <td>{{ $newsitem->title }}</td>
            <td>{{ $newsitem->link }}</td>
            {{-- <td>{{ $newsitem->rss_feed_id }}</td> --}}
            {{-- <td>{{ $newsitem->category_id }}</td> --}}
            <td>{{ $newsitem->pubdate }}</td>
        <td>
        <a href="{{ action('NewsitemController@show', $newsitem['id']) }}"><i class="fa fa-eye"></i></a>
        {{-- <a href="{{ action('NewsitemController@edit', $newsitem['id']) }}"><i class="fa fa-pencil"></i></a> --}}
        <a href="{{ action('NewsitemController@destroy', $newsitem['id']) }}"><i class="fa fa-trash"></i></a>
        
        </td>
        </tr>
    </tbody>
    @endforeach;
    
</table>    

<a href="{{ action('HomeController@index') }}" class="btn btn-success pull-left">Home <i class="fa fa-home"></i></a>


</div>
@endsection