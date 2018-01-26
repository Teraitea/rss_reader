@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        <p>{{ \Session::get('error') }}</p>
                    </div><br />
                    @endif

                    <a href="{{ url('/home/users') }}"><i class="fa fa-user"></i> User's information</a><br />
                    <a href="{{ url('/home/userstypes') }}"><i class="fa fa-user"></i> User's type information</a><br />
                    {{-- <a href="{{ url('/home/categorys') }}"><i class="fa fa-user"></i> Category's information</a><br/> --}}
                    
                    <a href="{{ url('/home/newsitems') }}"><i class="fa fa-rss"></i> Rss Feeds</a><br />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
