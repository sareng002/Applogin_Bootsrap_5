{{-- navigasi dari bootsrap --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary align-items-center">
    <div class="container">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li>
            </ul>

            @auth
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" href="{{ route('dashboard') }}"
                        id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-light" width="25px" height="25px"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="navbarDropdown" <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();this.closest('form').submit();" class=" dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-dark" width="25px" height="25px"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span>{{ __('Log Out') }}</span>
                            </a>
                        </form>
                </li>
            </ul>
            </li>
            </ul>
            @else
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown">
                        <span class="text-light text-uppercase">User</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li>
                            <a class="dropdown-item" href="{{ route('login') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="" width="25px" height="25px" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                                Login
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('register') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="" width="25px" height="25px" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>
                                Register
                            </a>
                        </li>
                    </ul>

                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>