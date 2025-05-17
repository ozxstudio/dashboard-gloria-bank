@extends('layouts.navhome')

@section('title', 'Home')

@section('content')
    <h5 class="blue-text text-darken-2 mb-80">This is Digital Project.</h5>

    <div class="card-grid">
        <div class="card custom-card gold-glow z-depth-3 mb-40">
            <div class="card-image">
                <img src="{{ asset('assets/img/me3.png') }}" />
                <span class="card-title">Awal Mula</span>
            </div>
            <div class="card-content">
                <h5>Cloud Storage Sampah Digital</h5>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos molestiae rerum
                    perferendis
                    vel nostrum officiis debitis, eveniet ab odit aliquid molestias consequatur et sapiente. Vel
                    perspiciatis minima doloribus rerum iure. Rem ad distinctio asperiores odio iure, accusantium
                    assumenda excepturi nesciunt? 💖
                </p>
            </div>
        </div>

        <div class="card custom-card aqua-marine z-depth-3 mb-40">
            <div class="card-image">
                <img src="{{ asset('assets/img/ME21.png') }}" />
                <span class="card-title">Cahaya Pertama</span>
            </div>
            <div class="card-content">
                <h5>Daur Ulang Sampah Digital</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem sapiente vero pariatur ad
                    deleniti
                    ipsa porro, minus, harum blanditiis tempora laborum dolor! Molestiae excepturi libero doloribus
                    iste
                    quasi eaque aperiam vero deleniti ducimus nam fugit officiis, eum dignissimos non illum.
                    💖
                </p>
            </div>
        </div>
    </div>
@endsection
