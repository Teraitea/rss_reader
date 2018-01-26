@extends('layouts.app')

@section('content')  


    <div class="container">
    
    @if (\Session::has('success'))
          <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
          </div><br />
        @endif
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Type User</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($usertypes AS $usertype)
          <tr>
            <td>{{ $usertype->id }}</td>
            <td>{{ $usertype->name }}</td>
            <td>              
              <a href="{{ action('UserstypeController@show', $usertype->id) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
              <a href="{{ action('UserstypeController@edit', $usertype->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
              <a href="{{ action('UserstypeController@destroy', $usertype->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>

            </td>
          </tr>
      @endforeach
        </tbody>
      </table>

      <a href="{{ action('HomeController@index') }}" class="btn btn-success pull-left">Home <i class="fa fa-home"></i></a>
      <a href="{{ action('UserstypeController@new') }}" class="btn btn-success pull-right">Ajouter un user type <i class="fa fa-plus-circle"></i></a>

    </div>
@endsection