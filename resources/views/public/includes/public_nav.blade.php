<nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{route('index.index')}}">
                    <i class="bi-back"></i>
                    <span>Topic</span>
                </a>

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index.index')}}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index.topic_listing')}}">Topics Listing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index.testimonials')}}">Our Client Says</a>
                        </li>
                    </ul>


                    @if (Route::has('login'))
    <div class="d-none d-lg-block dropdown">
        <a href="#" class="navbar-icon bi-person smoothscroll" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            @auth
                <li>
                    <a href="{{ url('/home') }}" class="dropdown-item">Dashboard</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                          {{ __('Sign Out') }}
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                <li>
                    <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                    </li>
                @endif
            @endauth
        </ul>
    </div>
@endif


                </div>
            </div>
        </nav>
        <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index.index')}}">Homepage</a></li>
