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
          <tr>
            <td>{{ $userstype->id }}</td>
            <td>{{ $userstype->name }}</td>
            <td>
              <a href="{{ action('UserstypeController@edit', $userstype->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
            </td>
          </tr>
        </tbody>
      </table>

      <a href="{{ action('UserstypeController@index') }}" class="btn btn-success pull-left">Back <i class="fa fa-caret-square-o-left"></i></a>
      <a href="{{ action('UserstypeController@new') }}" class="btn btn-success pull-right">Ajouter un user type <i class="fa fa-plus-circle"></i></a>

    </div>
@endsection