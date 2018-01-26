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
            <th>Name</th>
            <th>User ID</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($categorys AS $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->user_id }}</td>
            <td>              
              <a href="{{ action('CategoryController@show', $category->id) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
              <a href="{{ action('CategoryController@edit', $category->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
              <a href="{{ action('CategoryController@destroy', $category->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>

            </td>
          </tr>
      @endforeach
        </tbody>
      </table>

      <a href="{{ action('HomeController@index') }}" class="btn btn-success pull-left">Home <i class="fa fa-home"></i></a>
      <a href="{{ action('CategoryController@new') }}" class="btn btn-success pull-right">Ajouter une catégorie <i class="fa fa-plus-circle"></i></a>

    </div>
@endsection