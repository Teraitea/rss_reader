@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->lastname}}</td>
      <td>{{$user->firstname}}</td>
      <td>{{$user->email}}</td>
      <td>
        <a href="{{ action('UserController@edit', $user['id']) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
        <a href="{{ action('UserController@destroy', $user['id']) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
    </tbody>
    </table>
    <a href="{{ action('UserController@index') }}" class="btn btn-success pull-left">Back <i class="fa fa-caret-square-o-left"></i></a>

    </div>
    @endsection