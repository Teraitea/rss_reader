@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add NewsItem</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/home/newsitems') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                            <label for="link" class="col-md-4 control-label">Link</label>

                            <div class="col-md-6">
                                <input id="link" type="text" class="form-control" name="link" required autofocus>

                                @if ($errors->has('link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label for="category_id" class="col-md-4 control-label">Category ID</label>

                            <div class="col-md-6">
                                <input id="category_id" type="number" class="form-control" name="category_id" required autofocus>

                                @if ($errors->has('category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rss_feed_id') ? ' has-error' : '' }}">
                            <label for="rss_feed_id" class="col-md-4 control-label">Rss Feed ID</label>

                            <div class="col-md-6">
                                <input id="rss_feed_id" type="number" class="form-control" name="rss_feed_id" required autofocus>

                                @if ($errors->has('rss_feed_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rss_feed_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                            <label for="user_id" class="col-md-4 control-label">User ID</label>

                            <div class="col-md-6">
                                <input id="user_id" type="number" class="form-control" name="user_id" required autofocus>

                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pubdate') ? ' has-error' : '' }}">
                            <label for="pubdate" class="col-md-4 control-label">Publication Date</label>

                            <div class="col-md-6">
                                <input id="pubdate" type="date" class="form-control" name="pubdate" required>

                                @if ($errors->has('pubdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pubdate') }}</strong>
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
