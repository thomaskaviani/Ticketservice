

<nav class="uk-navbar-container" uk-navbar>
  <div class="uk-navbar-left">
      <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="/">Home</a></li>
          <li>
              <a href="/events">Evenementen</a>
              <div class="uk-navbar-dropdown">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                      <li class="uk-active"><a href="#">Recente</a></li>
                      <li><a href="#">laatste</a></li>
                      <li><a href="#">voorlaatste</a></li>
                  </ul>
              </div>
          </li>
          <li><a href="/about">About</a></li>
      </ul>
  </div>
  <div class="uk-navbar-right">
    <ul class="uk-navbar-nav">
        @if(Auth::guest())
          <li><a href="{{ route('login')}}">Login</a></li>
          <li><a href="/about">Register</a></li>
        @else
          <li>
            <a href="#">{{ Auth::user()->username }}</a>
            <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li class="uk-active">
                        <a class="dropdown-item" href="/dashboard/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </li>
                    <li><a href="/dashboard">Dashboard</a></li>
                </ul>
            </div>
          </li>
        @endif
        

    </ul>
  </div>
</nav>
<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
      
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/events">Evenementen</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Over ons
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Team</a>
                <a class="dropdown-item" href="#">Info</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <div class="float-right">
              @if(Auth::guest())
              <ul class="navbar-nav mr-auto">
              <li><a href="{{ route('login')}}">Login</a></li>
              </ul>
              @endif
          </div>
    </div>
</nav>-->
<!--<nav class="navbar">
              
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/events">Events</a></li>
            
        </ul>
        @if(Auth::guest())
        <ul class="login">
        <li><a href="{{ route('login')}}">Login</a></li>
        </ul>
        @endif

       
</nav>-->