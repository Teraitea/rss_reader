@extends('layouts.app')

@section('title','Actualités')

@section('content')
<div class="container-fluid">
@if(count($newsitems) == 0)
<h2>Bienvenue sur votre page d'accueil</h2>
<p>Pour commencer, veuillez ajouter un flux rss, en cliquant <strong><a style="text-decoration:underline;" href=" {{ url('home/rssfeeds/new') }} ">ici</a></strong></p>
@else
<p>Actualités</p>
<button id="bouton">Changer de vue</button>
    @endif

<div id="firstview">
  @foreach($newsitems->chunk(3) as $chunk)
  <div class="row">
    @foreach($chunk AS $newsitem)
      <div class="col-md-4 mt-4">
        <div class="card" style="width:300px">
          <div class="hovereffect">
            <img class="card-img-top" src={{ $newsitem->url_image }} alt="Card image" style="width:100%">
              <div class="overlay">
                <h3 class="mt-5">
                  <a class="info" style="border:none;" href="{{ action('NewsitemController@show', $newsitem['id']) }}"><i class="fa fa-eye"></i></a>
                  <a class="info" style="border:none;" href="{{ action('NewsitemController@show', $newsitem['id']) }}"><i class="fa fa-heart"></i></a>
                  <a class="info" style="border:none;" href="{{ action('NewsitemController@show', $newsitem['id']) }}"><i class="fa fa-trash"></i></a>
                </h3>
              </div>
            </div>
          <div class="card-body">
            <h4 class="card-title" style="font-size:10px;">{{ $newsitem->title }}</h4>
          </div>
        </div>
        </div>
      @endforeach
    </div>  
  @endforeach
</div>
<div id="secondView">
<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th>#</th>
            <!-- <th>User ID</th> -->
            <th>Titre de l'article</th>
            {{-- <th>Lien de l'article</th> --}}
            {{-- <th>Rss Feed ID</th> --}}
            {{-- <th>Category ID</th> --}}
            <th>Date de publication</th>
            <th colspan="3"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($newsitems as $newsitem)
        @if($newsitem->viewed == 1)
            <tr class="alert-dark">
        @else
            <tr>
            @endif
            <td>{{ $newsitem->id }}</td>
            {{-- <td>{{ $newsitem->user_id }}</td> --}}
            <td><a href="{{ action('NewsitemController@show', $newsitem['id']) }}">{{ $newsitem->title }}</a></td>
            {{-- <td>{{ $newsitem->link }}</td> --}}
            {{-- <td>{{ $newsitem->rss_feed_id }}</td> --}}
            {{-- <td>{{ $newsitem->category_id }}</td> --}}
            <td>{{ \Carbon\Carbon::parse($newsitem->pubdate)->format('d/m/Y h:i')}}</td>
        <td>
        {{-- <a href="{{ action('NewsitemController@show', $newsitem['id']) }}"><button class="btn btn-default"><i class="fa fa-eye"></i></button></a> --}}
        {{-- <a href="{{ action('NewsitemController@edit', $newsitem['id']) }}"><i class="fa fa-pencil"></i></a> --}}
        <a href="{{ action('NewsitemController@destroy', $newsitem['id']) }}"><button class="btn btn-default"><i class="fa fa-trash"></i></button></a>
        
        </td>
        </tr>
    </tbody>
    @endforeach
</table>    
</div>
  
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
      $(document).ready(function(){

        var etat = 0;
        $('#secondView').hide();
        function changeView(){
          if(etat = 1){
            $("#firstview").show();
            $("#secondView").hide();
            etat = 0;
          } else if(etat=0) {
            $("#secondView").show();
            $("#firstview").hide();
            etat = 1;
          }
        }
        $("#bouton").click(function(){
          setTimeout(changeView, 1000);
        });
      });
    </script>
@endsection