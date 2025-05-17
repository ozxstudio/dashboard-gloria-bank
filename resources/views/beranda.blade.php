@extends('layouts.navhome')

@section('title', 'Home')

@section('content')

    <div class="container">
        <h3 class="center-align">Beranda</h3>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-field">
                <input id="email" type="email" name="email" required>
                <label for="email">Email</label>
            </div>

            <div class="input-field">
                <input id="password" type="password" name="password" required>
                <label for="password">Password</label>
            </div>

            <div class="center-align">
                <button class="btn waves-effect waves-light" type="submit">Login</button>
            </div>
        </form>

        <div class="center-align" style="margin-top: 20px; margin-bottom: 40px">
            <a href="{{ route('register') }}">Belum punya akun? Register</a>
        </div>
    </div>
    <div class="card section z-depth-3 mt-40">
        <h3>Gudang Laba Foundation Fund</h3>
        <h5>Internet dan wiFi Gratis</h5>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quasi laborum quibusdam voluptate quod
            asperiores
            nulla facilis reiciendis iste hic.
        </p>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At hic perspiciatis pariatur praesentium odit
            dignissimos maiores culpa molestias dolorum dolores tempora sint architecto nihil consectetur, expedita
            autem
            tempore? Deserunt hic expedita provident sunt aliquam, a enim mollitia tempora? Nisi, animi.
        </p>
    </div>
    <div class="card section z-depth-3">
        <h3>Gudang Laba Foundation Fund</h3>
        <h5>Internet dan wiFi Gratis</h5>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quasi laborum quibusdam voluptate quod
            asperiores
            nulla facilis reiciendis iste hic.
        </p>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At hic perspiciatis pariatur praesentium odit
            dignissimos maiores culpa molestias dolorum dolores tempora sint architecto nihil consectetur, expedita
            autem
            tempore? Deserunt hic expedita provident sunt aliquam, a enim mollitia tempora? Nisi, animi.
        </p>
    </div>
    <div class="card section z-depth-3 mb-40">
        <h3>Gudang Laba Foundation Fund</h3>
        <h5>Internet dan wiFi Gratis</h5>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quasi laborum quibusdam voluptate quod
            asperiores
            nulla facilis reiciendis iste hic.
        </p>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At hic perspiciatis pariatur praesentium odit
            dignissimos maiores culpa molestias dolorum dolores tempora sint architecto nihil consectetur, expedita
            autem
            tempore? Deserunt hic expedita provident sunt aliquam, a enim mollitia tempora? Nisi, animi.
        </p>
    </div>
@endsection
