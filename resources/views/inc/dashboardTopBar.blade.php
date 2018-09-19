
<!-- Topbar dashboard -->
<nav uk-sticky class="uk-navbar-container topbar" uk-navbar>
    <div class="uk-navbar-left">
        <h3>{{ $title or 'not-exist' }}</h3>
    </div>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <li>
                <a href="#"><span uk-icon="user"></span><p>Bart Sevenois</p></a>
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
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>