<div class="topBar">
       <h3>{{ $title or 'not-exist' }}</h3>

    <div class="dropdown">
        <a class="dropbtn"> {{ Auth::user()->username }}</a>
        <div class="dropdown-content">
            <a class="dropdown-item" href="/dashboard/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
    
</div>