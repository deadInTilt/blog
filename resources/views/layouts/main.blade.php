<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogify</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<body>
    <div class="edica-loader"></div>
    <header class="edica-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('main.index') }}">
                    <img src="{{ asset('/assets/images/logo.jpg') }}" alt="Blogify" width="50" height="auto">
                    <span class="site-name">Blogify</span>
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('main.index') }}">Домашняя страница <span class="sr-only">(current)</span></a>
                        </li>
                        </li>
                            <li class="nav-item active">
                        @auth()
                                <a class="nav-link" href="{{ route('personal.main.index') }}">Личный кабинет <span class="sr-only">(current)</span></a>
                        @endauth
                            </li>
                            <li class="nav-item active">
                        @guest()
                                <a class="nav-link" href="{{ route('personal.main.index') }}">Login <span class="sr-only">(current)</span></a>
                        @endguest
                            </li>
                        <li class="nav-item active">
                            <a class="nav-link text-danger" href="{{ route('admin.index') }}">Админка <span class="sr-only">(current)</span></a>
                    </ul>

                </div>
            </nav>
        </div>
    </header>

@yield('main')
    <section class="edica-footer-banner-section">
        <div class="container">
            <div class="footer-banner" data-aos="fade-up">
                <h1 class="banner-title">Теперь и на твоем телефоне.</h1>
                <div class="banner-btns-wrapper">
                    <button class="btn btn-success"> <img src="assets/images/apple@1x.svg" alt="ios" class="mr-2"> App Store</button>
                    <button class="btn btn-success"> <img src="assets/images/android@1x.svg" alt="android" class="mr-2"> Google Play</button>
                </div>
                <p class="banner-text">Выберите вашу операционную систему.</p>
            </div>
        </div>
    </section>
    <footer class="edica-footer" data-aos="fade-up">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="mb-0">© Blogify, 2025 </p>
                <p class="mb-0">All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        AOS.init({
            duration: 1000
        });
      </script>
</body>

</html>
