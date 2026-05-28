<style>
    .nav-link-custom {
        font-weight: 600;
        color: #ffffff !important;
        padding-bottom: 0.4rem;
    }

    .nav-link-custom:hover {
        color: #ffeb3b !important;
    }

    .nav-link-custom.active {
        color: #ffeb3b !important;
        border-bottom: 3px solid #ffeb3b;
    }

    .signup-btn {
        font-weight: 600;
        letter-spacing: 0.03em;
    }

    .signup-btn:hover{
        background-color: black !important;
        border-color: #ffeb3b !important;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark  shadow py-0" style="background-color: rgb(14, 75, 37)">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand ms-2" href="{{ route('home') }}" >
        <img src="{{ asset('images/logo.png')}}" alt="Logo" width="40" height="40" class="rounded-circle">
        
        </a>

        <!-- Toggler for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav" style="font-family: 'Montserrat', sans-serif;">
            <ul class="navbar-nav me-auto">
                <!-- Tabs (example: Rooms, Guests, Bookings) -->
                <li class="nav-item">
                    {{-- <a class="nav-link {{ request()->routeIs('rooms.*') ? 'active' : '' }}" href="{{ route('rooms.index') }}">Rooms</a> --}}
                    <a class="nav-link nav-link-custom" href="{{ route('rooms')}}">Rooms</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ request()->routeIs('guests.*') ? 'active' : '' }}" href="{{ route('guests.index') }}">Guests</a> --}}
                    <a class="nav-link nav-link-custom" href="{{ route('booking')}}">Booking</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ request()->routeIs('bookings.*') ? 'active' : '' }}" href="{{ route('bookings.index') }}">Bookings</a> --}}
                    <a class="nav-link nav-link-custom" href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a> --}}
                    <a class="nav-link nav-link-custom" href="{{ route('more')}}">More</a>
                </li>
            </ul>

            <!-- Login / Register or User Dropdown -->
            <ul class="navbar-nav ms-auto">
                @guest
                    <!-- Show Login & Register when not logged in -->
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light btn-sm ms-2 signup-btn nav-link-custom" href="{{ route('register') }}">Sign Up</a>
                    </li>
                @else
                    <!-- Show user name and Logout when logged in -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


{{-- <section>
    <img src="{{ asset('images/home.jpg')}}" alt="" width="100%" height="600">
</section> --}}
