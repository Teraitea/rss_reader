@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Rss Feeds</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/home/rssfeeds') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rss_feed_link') ? ' has-error' : '' }}">
                            <label for="rss_feed_link" class="col-md-4 control-label">rss_feed_link</label>

                            <div class="col-md-6">
                                <input id="rss_feed_link" type="text" class="form-control" name="rss_feed_link" required autofocus>

                                @if ($errors->has('rss_feed_link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rss_feed_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                            <!-- <label for="user_id" class="col-md-4 control-label">User ID</label> -->

                            <div class="col-md-6">
                                <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{$userid}}" required autofocus>

                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
