@extends('layouts.app')

@section('content')
<div class="container-fluid">

@if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
    @endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <!-- <th>User ID</th> -->
            <th>Title</th>
            <th>Link</th>
            <th>Rss Feed ID</th>
            <th>Category ID</th>
            <th>Publication Date</th>
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
            <td>{{ $newsitem->rss_feed_id }}</td>
            <td>{{ $newsitem->category_id }}</td>
            <td>{{ $newsitem->pubdate }}</td>
        <td>
        <a href="{{ action('NewsitemController@show', $newsitem['id']) }}"><i class="fa fa-eye"></i></a>
        <a href="{{ action('NewsitemController@edit', $newsitem['id']) }}"><i class="fa fa-pencil"></i></a>
        <a href="{{ action('NewsitemController@destroy', $newsitem['id']) }}"><i class="fa fa-trash"></i></a>
        
        </td>
        </tr>
    </tbody>
    @endforeach;
    
</table>    
<a href="{{ url('/home/rssfeeds/new') }}" class="btn btn-success pull-right">Ajouter une news <i class="fa fa-plus-circle"></i></a>

<a href="{{ action('HomeController@index') }}" class="btn btn-success pull-left">Home <i class="fa fa-home"></i></a>


</div>
@endsection