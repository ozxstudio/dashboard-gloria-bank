<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @vite('resources/js/app.jsx')

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        footer.page-footer {
            padding-top: 0;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        .mb-40 {
            margin-bottom: 40px;
        }
    </style>
</head>

<body>

    <nav>
        <div class="nav-wrapper blue darken-3 z-depth-4">
            <div class="container">
                <a href="{{ route('dashboard') }}" class="brand-logo">Gloriabank</a>
                <ul class="right">
                    @auth
                        <li><a href="{{ route('beranda') }}">Home</a></li>
                        <li><a href="{{ route('transparansi') }}">Transparansi</a></li>
                        <li><a href="{{ route('profile.edit') }}">Profile</a></li>


                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn blue darken-2" type="submit">Logout</button>
                            </form>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main class="container" style="margin-top: 30px;">
        @yield('content')
    </main>
    <footer class="page-footer blue darken-3">
        <div class="container center-align white-text">
            <p>© 2025 Gloriabank | Bebas Riba | Digital Collective Banking</p>
            <p>Powered by OZX DevLabs 🧠</p>
        </div>
    </footer>
    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
