<header>
    <h1>Laravel 8 - Desde Cero</h1>
    <nav>
        <ul>
            <li>
                <a href="{{route('users.index')}}" class="{{request()->routeIs('users.*') ? 'active' : ''}}">Users</a>
                @dump(request()->routeIs('users.index'))
            </li>
            <li>
                <a href="{{route('about')}}"  class="{{request()->routeIs('about') ? 'active' : ''}}">About Us</a>
                @dump(request()->routeIs('about'))
            </li>
        </ul>
    </nav>
</header>
