@extends('layouts.app')

@section('content')
    <h4>Welcome, {{ $user->name }}!</h4>

    <div class="card">
        <div class="card-content">
            <span class="card-title">Informasi Akun</span>
            <p><strong>Nama:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
        </div>
        <div class="card-action">
            <a href="{{ route('profile.edit') }}" class="btn blue">Edit Profil</a>
        </div>
    </div>
@endsection
