@extends('layouts.app')

@section('content')
    <h4>Welcome, {{ $user->name }}!</h4>

    <h5 class="blue-text text-darken-2 mb-40">This is your dashboard.</h5>

    <div class="card">
        <div class="card-content">
            <span class="card-title">Informasi Akun</span>
            <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Saldo:</strong> {{ Auth::user()->saldo }}</p>
            <p><strong>Transaksi:</strong> {{ Auth::user()->transaksi }}</p>
        </div>
        <div class="card-action">
            <a href="{{ route('profile.edit') }}" class="btn blue">Edit Profil</a>
        </div>
    </div>
@endsection
