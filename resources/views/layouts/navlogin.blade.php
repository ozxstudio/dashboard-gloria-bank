<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
        /* ========== GLOBAL RESET ========== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* ========== BODY ========== */
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        /* ========== HERO SECTION ========== */
        .hero {
            background: url("assets/bg-stars.jpg") center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            margin-bottom: 40px;
        }

        .hero h2 {
            text-shadow: 2px 2px #000;
        }

        .hero p {
            text-shadow: 1.5px 1.5px #000;
        }

        main {
            flex: 1 0 auto;
        }

        footer.page-footer {
            padding-top: 0;
            padding-bottom: 20px;
            margin-top: 40px;
        }

        .mb-40 {
            margin-bottom: 40px;
        }

        .mt-40 {
            margin-top: 40px;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* 2 kolom */
            gap: 40px;
            justify-items: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .section {
            padding: 60px 50px;
            padding-bottom: 40px;
            margin-bottom: 40px;
        }

        .custom-shadow {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="blue darken-3 z-depth-1">
        <div class="nav-wrapper container">
            <a href="{{ url('/') }}" class="brand-logo">Gloriabank</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    <footer class="page-footer blue darken-3 mt-40">
        <div class="container center-align white-text mt-40">
            <p>© 2025 Gloriabank | Bebas Riba | Digital Collective Banking</p>
            <p>Powered by OZX DevLabs 🧠</p>
        </div>
    </footer>
    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.slider');
            M.Slider.init(elems, {
                indicators: false,
                height: 600,
                duration: 600,
                interval: 5000
            });
        });
    </script>
</body>

</html>
