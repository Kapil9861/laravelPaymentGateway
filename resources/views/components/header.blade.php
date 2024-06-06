<header class="header">
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
    </div>
    <div class="title">
        <a href="{{ route('home') }}">Sajilo Hisab</a>
    </div>
    <nav class="navigation">
        <ul>
            <li class="{{ Request::routeIs('install') ? 'active' : '' }}">
                <a href="{{ route('install') }}">Install Sajilo Hisab</a>
            </li>
            <li class="{{ Request::routeIs('rules') ? 'active' : '' }}">
                <a href="{{ route('rules') }}">Rules</a>
            </li>
            <li class="{{ Request::routeIs('tutorial') ? 'active' : '' }}">
                <a href="{{ route('tutorial') }}">Tutorial</a>
            </li>
            <li class="{{ Request::routeIs('privacy') ? 'active' : '' }}">
                <a href="{{ route('privacy') }}">Privacy Policy</a>
            </li>
            <li class="{{ Request::routeIs('aboutUs') ? 'active' : '' }}">
                <a href="{{ route('aboutUs') }}">About Us</a>
            </li>
        </ul>
    </nav>
</header>
<style>
    .navigation ul li.active a {
        font-weight: bold;
        color: #8d7de8;
    }
</style>
