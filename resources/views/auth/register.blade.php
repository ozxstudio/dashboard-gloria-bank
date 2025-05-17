@extends('layouts.app')

@section('content')
    <h4 class="center-align">Register</h4>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input-field">
            <input id="name" type="text" name="name" required>
            <label for="name">Name</label>
        </div>

        <div class="input-field">
            <input id="email" type="email" name="email" required>
            <label for="email">Email</label>
        </div>

        <div class="input-field">
            <input id="password" type="password" name="password" required>
            <label for="password">Password</label>
        </div>

        <div class="input-field">
            <input id="password_confirmation" type="password" name="password_confirmation" required>
            <label for="password_confirmation">Confirm Password</label>
        </div>

        <div class="input-field center-align">
            <button class="btn waves-effect waves-light" type="submit">Register</button>
        </div>
    </form>
@endsection
