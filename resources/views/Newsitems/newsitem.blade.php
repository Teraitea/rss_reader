@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>User ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Link</th>
            <th>Rss Feed ID</th>
            <th>Category ID</th>
            <th>Publication Date</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $newsitem->id }}</td>
            <td>{{ $newsitem->user_id }}</td>
            <td>{{ $newsitem->title }}</td>
            <td>{{ $newsitem->description }}</td>
            <td>{{ $newsitem->link }}</td>
            <td>{{ $newsitem->rss_feed_id }}</td>
            <td>{{ $newsitem->category_id }}</td>
            <td>{{ $newsitem->pubdate }}</td>
        <td>
        <a href="{{ action('NewsitemController@show', $newsitem['id']) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
        <a href="{{ action('NewsitemController@edit', $newsitem['id']) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
        <a href="{{ action('NewsitemController@destroy', $newsitem['id']) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        
        </td>
        </tr>
    </tbody>
</table>
</div>
@endsection