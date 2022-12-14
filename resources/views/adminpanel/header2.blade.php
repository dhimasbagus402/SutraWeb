
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/dashboard">Dashboard</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img class="img-fluid3 rounded" style="width: 40px; height: 40px;" src="{{asset('/storage/userimg/'. $fileName)}}" alt="profile_image">
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="navbarlink" href="/users">User</a>    
                                    <a class="navbarlink" href="/jamaah">Jamaah</a>
                                    <a class="navbarlink" href="/dashboard">Blog</a>
                                    <a class="navbarlink" href="/views">Tampilan</a>
                                    <a class="navbarlink" href="/promos">Promo</a>
                                    <a class="navbarlink" href="/" target="_blank">Website</a>

                                    <a class="navbarlink" href="{{ route('logout') }}"
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
                </li>
            </ul>
        </nav>