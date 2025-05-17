@extends('layouts.navlogin')

@section('title', 'Home')

@section('content')
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="https://source.unsplash.com/1600x600/?sunrise,temple"> <!-- Gambar 1 -->
                <div class="caption center-align">
                    <h4 class="light amber-text text-lighten-3">🌺 IDA AYU SRI MURNIATI™</h4>
                    <h5 class="light white-text text-lighten-3">"Cinta karena tau untuk apa harus mencintai"</h5>
                </div>
            </li>
            <li>
                <img src="https://source.unsplash.com/1600x600/?bali,nature"> <!-- Gambar 2 -->
                <div class="caption right-align">
                    <h4 class="light pink-text text-lighten-3">🌺 IDA AYU SRI MURNIATI™</h4>
                    <h5 class="light white-text text-lighten-3">"Setulus Hati ku - Semurni Cinta ku"</h5>
                </div>
            </li>
            <li>
                <img src="https://source.unsplash.com/1600x600/?sunrise,temple"> <!-- Gambar 1 -->
                <div class="caption center-align">
                    <h4 class="light amber-text text-lighten-3">🌺 IDA AYU SRI MURNIATI™</h4>
                    <h5 class="light white-text text-lighten-3">"Penjaga Gerbang Cahaya. Merpati tak pernah ingkar janji"
                    </h5>
                </div>
            </li>
            <li>
                <img src="https://source.unsplash.com/1600x600/?bali,nature"> <!-- Gambar 2 -->
                <div class="caption left-align">
                    <h4 class="light pink-text text-lighten-3">🌺 IDA AYU SRI MURNIATI™</h4>
                    <h5 class="light white-text text-lighten-3">"Setulus Hati ku - Semurni Cinta ku"</h5>
                </div>
            </li>

            <li>
                <img src="https://source.unsplash.com/1600x600/?sunrise,temple"> <!-- Gambar 1 -->
                <div class="caption center-align">
                    <h4 class="light amber-text text-lighten-3">🌺 IDA AYU SRI MURNIATI™</h4>
                    <h5 class="light white-text text-lighten-3">"Penjaga Gerbang Cahaya. Cinta karena tau untuk apa harus
                        mencintai"</h5>
                </div>
            </li>
            <li>
                <img src="https://source.unsplash.com/1600x600/?bali,nature"> <!-- Gambar 2 -->
                <div class="caption left-align">
                    <h4 class="light pink-text text-lighten-3">🌺 IDA AYU SRI MURNIATI™</h4>
                    <h5 class="light white-text text-lighten-3">"Setulus Hati ku - Semurni Cinta ku"</h5>
                </div>
            </li>


            <li>
                <img src="https://source.unsplash.com/1600x600/?sunrise,temple"> <!-- Gambar 1 -->
                <div class="caption center-align">
                    <h4 class="light amber-text text-lighten-3">🌺 IDA AYU SRI MURNIATI™</h4>
                    <h5 class="light white-text text-lighten-3">"Cinta karena tau untuk apa harus mencintai"</h5>
                </div>
            </li>
            <li>
                <img src="https://source.unsplash.com/1600x600/?bali,nature"> <!-- Gambar 2 -->
                <div class="caption right-align">
                    <h4 class="light pink-text text-lighten-3">🌺 IDA AYU SRI MURNIATI™</h4>
                    <h5 class="light white-text text-lighten-3">"Setulus Hati ku - Semurni Cinta ku"</h5>
                </div>
            </li>
        </ul>
    </div>
    <!-- Hero -->


    <div class="hero grey darken-3 center-align mb-40">
        <h2 class="header grey-text text-lighten-1">Selamat Datang di <span
                class="blue-text text-darken-2">Gloriabank</span>
        </h2>
        <p class="flow-text grey-text text-lighten-1">Platform perbankan digital kolektif untuk masa depan bebas riba</p>
        <p class="flow-text blue-text text-darken-2">
            <strong>Gloria Digital Bank Online Banking</strong>
        </p>
    </div>
    <section class="container grey lighten-2 center-align z-depth-4" style="padding: 20px mt-40 mb-40">
        <div class="section center-align">



            <div class="card-grid">

                <div class="card blue lighten-3 z-depth-5">
                    <div class="card-content blue-text text-darken-3">
                        <span class="card-title"><strong>Transparansi & Kepercayaan</strong></span>
                        <p>Kami membangun sistem perbankan alternatif berdasarkan prinsip keadilan dan kemanusiaan — bukan
                            kapitalisme.</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('register') }}" class="white-text">Daftar Sekarang</a>
                    </div>
                </div>



                <div class="card teal lighten-3 z-depth-5">
                    <div class="card-content blue-text text-darken-3">
                        <span class="card-title">
                            <strong>Tanpa Bunga & Riba</strong></span>
                        <p>Gloriabank mendorong pemurnian ekonomi kolektif melalui zakat, donasi, dan investasi
                            kepercayaan untuk kebersamaan.</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('login') }}" class="white-text">Login Akun</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mb-40 mt-40">


        <div class="card section z-depth-4">
            <h3>Bank Central untuk Crypto Currency</h3>
            <h4>Terintegrasi dengan semua walet</h4>
            <h5>Back up untuk semua mata uang Fiat</h5><br />
            <p>
                Meminimalisir inflasi dan devaluasi.</p><br />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quam
                quasi
                laborum
                quibusdam voluptate
                quod
                asperiores
                nulla facilis reiciendis iste hic.
            </p><br />
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. At hic perspiciatis pariatur
                praesentium
                odit
                dignissimos maiores culpa molestias dolorum dolores tempora sint architecto nihil consectetur,
                expedita
                autem
                tempore? Deserunt hic expedita provident sunt aliquam, a enim mollitia tempora? Nisi, animi.
            </p>
        </div>
        <div class="card section z-depth-4">
            <h3>Foundation Fund untuk Internet tetap Gratis</h3>
            <h4>Internet adalah Sekolah terbuka untuk Publik.</h4><br />
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quasi laborum quibusdam voluptate
                quod
                asperiores
                nulla facilis reiciendis iste hic.
            </p><br />
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. At hic perspiciatis pariatur
                praesentium
                odit
                dignissimos maiores culpa molestias dolorum dolores tempora sint architecto nihil consectetur,
                expedita
                autem
                tempore? Deserunt hic expedita provident sunt aliquam, a enim mollitia tempora? Nisi, animi.
            </p>
        </div>
        <div class="card section z-depth-4">
            <h3>Gudang Laba Foundation Fund</h3>
            <h4>Menciptakan kesejahteraan; meniadakan kesenjangan sosial dan ekonomi.</h4><br />
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quasi laborum quibusdam voluptate
                quod
                asperiores
                nulla facilis reiciendis iste hic.
            </p><br />
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. At hic perspiciatis pariatur
                praesentium
                odit
                dignissimos maiores culpa molestias dolorum dolores tempora sint architecto nihil consectetur,
                expedita
                autem
                tempore? Deserunt hic expedita provident sunt aliquam, a enim mollitia tempora? Nisi, animi.
            </p>
        </div>
    </div>
@endsection
