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




        .mb-40 {
            margin-bottom: 40px;
        }

        .mt-40 {
            margin-top: 40px;
        }

        .section {
            padding: 60px 50px;
            padding-bottom: 40px;
            margin-bottom: 40px;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* 2 kolom */
            gap: 20px;
            justify-items: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .custom-shadow {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="blue darken-3 z-depth-4">
        <div class="nav-wrapper container">
            <a href="{{ route('beranda') }}" class="brand-logo">Gloriabank</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('transparansi') }}">Transparansi</a></li>

                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
        </div>
    </nav>
    <main class="container" style="margin-top: 30px;">
        @yield('content')
    </main>
    <footer class="page-footer blue darken-3 mt-40">


        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Gloria Digital Bank Online Banking</h5>
                    <p class="grey-text text-lighten-4">Gloriabank: Lisensi Bank Indonesia dan Bank Dunia, <br />
                        peserta LPS
                        (Lembaga
                        Penjamin
                        Simpanan)</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Project</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="{{ route('digital') }}">Digital Project</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('gudang') }}">Gudang Laba Enterprise</a>
                        </li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('fund') }}">Foundation Fund</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('pamm') }}">PAMM / Social Trading</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright blue darken-4">
            <div class="container">
                © 2025 Gloriabank | Bebas Riba | Digital Collective Banking<br /> Powered by OZX DevLabs 🧠 <a
                    class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(elems, {
                // opsional: bisa diatur sesuai kebutuhan
                coverTrigger: false,
                constrainWidth: false
            });
        });
    </script>

</body>

</html>
