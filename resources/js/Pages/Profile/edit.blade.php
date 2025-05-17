@extends('layouts.app')

@section('content')
    <h4>Edit Profile</h4>

    @if (session('status'))
        <div class="card-panel green lighten-4 green-text text-darken-4">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf

        <div class="input-field">
            <input id="name" name="name" value="{{ old('name', $user->name) }}" required>
            <label for="name" class="active">Name</label>
            @error('name')
                <span class="red-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-field">
            <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required>
            <label for="email" class="active">Email</label>
            @error('email')
                <span class="red-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-field">
            <input id="password" type="password" name="password">
            <label for="password">New Password (optional)</label>
            @error('password')
                <span class="red-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-field">
            <input id="password_confirmation" type="password" name="password_confirmation">
            <label for="password_confirmation">Confirm New Password</label>
        </div>

        <div class="center-align">
            <button class="btn waves-effect waves-light" type="submit">Update Profile</button>
        </div>
    </form>
@endsection
