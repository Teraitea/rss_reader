<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.firstname', 'Rss Reader | v1') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Rss Reader</h3>
                    <strong>BS</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="{{ action('HomeController@index') }}" >
                            <i class="glyphicon glyphicon-home"></i>
                            Accueil
                        </a>
                        
                    </li>
                    
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i>
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-paperclip"></i>
                            FAQ
                        </a>
                    </li>
                    <li class="pull-down">
                        <a href="{{ url('/home/rssfeeds/new') }}">
                            <i class="fa fa-plus"></i>
                            Ajouter du contenu
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                <div class="container">
                    @yield('content')
                </div>
            </div>

    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
