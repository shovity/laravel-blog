<nav id="navbar" class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}" data-toggle="tooltip" data-placement="bottom" title="Hello ajinomoto, Ohaio...">
               <span class="glyphicon glyphicon-home"></span> Shovity
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li @if($_SERVER["REQUEST_URI"]=="/articles") class="active" @endif><a href="{{ route('article.index') }}">Articles</a></li>
                <li @if($_SERVER["REQUEST_URI"]=="/animes") class="active" @endif><a href="{{ route('anime.index') }}">Animes</a></li>
            </ul>
        

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-registration-mark"></span> Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"> {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('article.create') }}"><span class="glyphicon glyphicon-plus-sign"></span> New Article</a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"> Logout</a>
                            </li>

                          
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>