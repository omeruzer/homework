    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-ligth"  >
        <div class="container">
            <a class="navbar-brand"href="{{ route('home') }}"><img src="https://www.istinye.edu.tr/sites/betatest.istinye.edu.tr/files/inline-images/logo_1_istinye.png" alt="" srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Anasayfa</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                </ul>
                <form class="d-flex" role="search">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">Üye Ol</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Giriş Yap</i></a>
                            </li>
                        @endguest
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('info')}}">Bilgilerim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('password')}}">Şifremi Değiştir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}">Çıkış Yap</a>
                            </li>
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cart') }}">({{Cart::count()}})Sepet <i
                                    class="fa fa-shopping-cart"></i></a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
