<!-- Spinner Start -->

    <!-- Spinner End -->

 <!-- Navbar & Carousel Start -->
 <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="m-0"><img src="{{ asset('img/logoemas.png') }}" class="logo1"></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link" style="color : black;">Home</a>
                    <a href="/about" class="nav-item nav-link" style="color : black;">Tentang Kami</a>
                    <a href="/services" class="nav-item nav-link" style="color : black;">Services</a>
                    <a href="/blog" class="nav-item nav-link" style="color : black;">Blog</a>
                    <a href="/contact" class="nav-item nav-link" style="color : black;">Kontak</a>
                </div>
                <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color : black;">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <?php
                                if(!file_exists('/storage/userimg/'. ( Auth::user()->image )))
                                    $fileName = ( Auth::user()->image );
                                else
                                    $fileName = "user.png";
                                ?>
                                <a id="navbarDropdown" style="color : black;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img class="img-fluid3 rounded" style="width: 40px; height: 40px;" src="{{asset('/storage/userimg/'. $fileName )}}" alt="profile_image">
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </nav>
</div>
    <!-- Navbar & Carousel End -->
