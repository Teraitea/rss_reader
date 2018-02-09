<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar" style="
    z-index: 99999999999;">
        <div class="sidebar-header">
            <img align="center" src="{{ url('images/logofeedsspeed-white.png') }}" width="200">
        </div>

        <ul class="list-unstyled components">

    
            <li class="active">
                <a href="{{ url('/home') }}" ><i class="fa fa-home"></i> Toutes les actualités</a>
                
            </li>

            <li>
                <a href="{{ url('/home/rssfeeds/new') }}"><i class="fa fa-plus"></i> Ajouter du contenu</a>
            </li>
     
            
            
        </ul>

        
    </nav>

    <!-- Page Content Holder -->
    <div id="content">

        <nav class="navbar fixed-top navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                        
                        <span></span>
                    </button>
                </div>

                <div class="navbar-header">           
                <div class="nav-item dropdown" >

                    @if (Auth::guest())
                        <div class="navbar-header"><a href="{{ route('login') }}" class="nav-link">S'inscrire</a></div>
                        <div class="navbar-header"><a href="{{ route('register') }}" class="nav-link">S'enregistrer</a></div>
                    @else
                    <div>
                        <img class="rounded-circle" style="height: 70px; width: 70px; position: absolute; right:236px; bottom: -8px;" src="{{ url('images/profilepicture.jpg') }}" width="200">
                    </div>  
                    <button style="background: #ffbd03;color: white;" class="nav-link dropdown-toggle btn btn-default navbar-btn" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        
                      {{ Auth::user()->lastname }}
                      {{ Auth::user()->firstname }}  
                    </button>
                    <div class="dropdown-menu">
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Se déconnecter
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    @endif
                </div>
                
                </div>
            </div>
        </nav>

    
    </div>
</div>