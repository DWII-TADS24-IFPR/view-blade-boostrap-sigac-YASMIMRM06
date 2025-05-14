@if (Route::has('login'))
    <div class="ml-auto">
        @auth
            <a href="{{ route('dashboard') }}" class="btn btn-outline-light mr-2">Dashboard</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline-light">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-outline-light mr-2">Login</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
            @endif
        @endauth
    </div>
@endif