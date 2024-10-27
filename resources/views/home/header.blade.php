<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">Hotel Royal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Room
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('our_room')}}">Room</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="room_details.html">Room Details</a></li>
                        <li><a class="dropdown-item" href="room_details2.html">Room Details 2</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('about_us')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('our_gallery')}}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('faq')}}">F.A.Qs</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Pages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('restaurant')}}">Restaurant</a></li>
                        <li><a class="dropdown-item" href="{{url('services')}}">Services</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact_us')}}">Contact</a>
                </li>
            </ul>
            <a href="{{url('our_room')}}">
                <button class="book-btn" type="button">Book Now</button>
            </a>

            @if (Route::has('login'))
                    @auth
                        <x-app-layout>

                        </x-app-layout>
                    @else
                        <a href="{{url('login')}}" class="login-icon">
                            <i class="fas fa-sign-in-alt"></i>
                        </a>

                        @if (Route::has('register'))

                            <a href="{{url('register')}}" class="register-icon">
                                <i class="fas fa-user-plus"></i>
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>