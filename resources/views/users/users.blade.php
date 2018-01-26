@extends('layouts.app')

@section('content')  

@if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
    @endif
    
<div class="container">

  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom de famille</th>
        <th>Prénom</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->lastname}}</td>
        <td>{{$user->firstname}}</td>
        <td>{{$user->email}}</td>
        <td>
        <a href="{{ action('UserController@show', $user['id']) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
        <a href="{{ action('UserController@edit', $user['id']) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
        <a href="{{ action('UserController@destroy', $user['id']) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        
        </td>
      </tr>
    </tbody>
      @endforeach
  </table>
  
  <a href="{{ action('HomeController@index') }}" class="btn btn-success pull-left">Home <i class="fa fa-home"></i></a>

</div>
@endsection