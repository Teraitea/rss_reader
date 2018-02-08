@extends('layouts.perso')

@section('content')
<div class="container-fluid">

@if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
    @endif    
    
    <div class="pull-right">
        <li style="list-style:none;" class="dropdown">
                <button class="dropdown-toggle btn btn-default" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->firstname }} <i class="caret"></i>
                </button>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{ url('/') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Se déconnecter</a>
                </li>
            </ul>
        </li>
    </div>
<p>Actualités</p>

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
            <td>{{ \Carbon\Carbon::parse($newsitem->pubdate)->format('d/m/Y h:i:s')}}</td>
        <td>
        <a href="{{ action('NewsitemController@show', $newsitem['id']) }}"><button class="btn btn-default"><i class="fa fa-eye"></i></button></a>
        {{-- <a href="{{ action('NewsitemController@edit', $newsitem['id']) }}"><i class="fa fa-pencil"></i></a> --}}
        <a href="{{ action('NewsitemController@destroy', $newsitem['id']) }}"><button class="btn btn-default"><i class="fa fa-trash"></i></button></a>
        
        </td>
        </tr>
    </tbody>
    @endforeach
    
</table>    



</div>
@endsection