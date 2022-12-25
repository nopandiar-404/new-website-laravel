<!-- Navbar Start  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('news.home') }}">World News</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 w-auto mb-lg-0 d-flex mx-auto align-items-center justify-content-evenly">
                <li class="nav-item mx-3">
                    <a href="{{ route('news.home') }}" class="nav-link" aria-current="page">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('about_us') }}" class="nav-link" aria-current="page">About Us</a>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('faq') }}" class="nav-link" aria-current="page">FAQ</a>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('contact_us') }}" class="nav-link" aria-current="page">
                        Contact Us
                    </a>
                </li>
            </ul>

            <div class="d-flex align-items-center justify-content-between w-auto">


                <!-- Choose Languages  -->
                <div class="dropdown me-5">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Languages
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Myanmar</a></li>

                    </ul>
                </div>


                @auth
                <div class="dropdown ms-auto me-4">
                    <div class="d-flex align-items-center justify-content-center" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">

                        @if (!auth()->user()->avatar)
                        <img src="{{ asset('storage/avatars/default-avatar-'.auth()->user()->id.'.png') }}" alt=""
                            width="40px" height="40px" class="rounded-circle me-2" style="object-fit: cover" />
                        @elseif (auth()->user()->avatar && auth()->user()->google_id &&
                        str_starts_with(auth()->user()->avatar, "http"))
                        <img src="{{ auth()->user()->avatar }}" alt="" width="40px" height="40px"
                            class="rounded-circle me-2" style="object-fit: cover" />
                        @elseif (auth()->user()->avatar && auth()->user()->facebook_id &&
                        str_starts_with(auth()->user()->avatar, "http"))
                        <img src="{{ auth()->user()->avatar }}" alt="" width="40px" height="40px"
                            class="rounded-circle me-2" style="object-fit: cover" />
                        @elseif (auth()->user()->avatar && auth()->user()->github_id &&
                        str_starts_with(auth()->user()->avatar, "http"))
                        <img src="{{ auth()->user()->avatar }}" alt="" width="40px" height="40px"
                            class="rounded-circle me-2" style="object-fit: cover" />
                        @elseif (auth()->user()->avatar && !str_starts_with(auth()->user()->avatar, "http"))
                        <img src="{{ asset('/storage/avatars/'.auth()->user()->avatar) }}" alt="" width="40px"
                            height="40px" class="rounded-circle me-2" style="object-fit: cover" />
                        @endif





                        <p class="mb-0 text-white">{{ auth()->user()->name }}</p>
                    </div>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                My Profile
                                <i class="fa-solid fa-address-card ms-3"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Bookmark
                                <i class="fa-sharp fa-solid fa-bookmark ms-3"></i>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li style="cursor: pointer;">
                            <form action="{{ route('logout') }}" method="POST" class="d-flex align-items-center px-3">
                                @csrf
                                <input type="submit" value="Logout" class="border-0"
                                    style="background-color: transparent;">
                                <i class="fa-solid fa-arrow-right-from-bracket ms-3"></i>
                            </form>
                        </li>
                    </ul>
                </div>
                @else
                <div>
                    <ul class="navbar-nav mb-2 w-auto mb-lg-0 d-flex mx-auto align-items-center justify-content-evenly">
                        <li class="nav-item mx-3">
                            <a class="nav-link text-decoration-underline text-primary" aria-current="page"
                                href="{{ route('register') }}">Register</a>
                        </li>

                        |
                        <li class="nav-item mx-3">
                            <a class="nav-link text-decoration-underline text-primary" aria-current="page"
                                href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
                @endauth







            </div>
        </div>
</nav>

@if (session("user-create"))
<div class="alert alert-success alert-dismissible fade show text-center mt-3" role="alert">
    {!! session("user-create") !!}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<!-- Navbar End  -->
