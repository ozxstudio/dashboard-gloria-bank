@extends('layouts.app')

@section('content')
    <h4 class="center-align">Login</h4>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-field">
            <input id="email" type="email" name="email" required autofocus>
            <label for="email">Email</label>
        </div>

        <div class="input-field">
            <input id="password" type="password" name="password" required>
            <label for="password">Password</label>
        </div>

        <div class="input-field center-align">
            <button class="btn waves-effect waves-light" type="submit">Login</button>
        </div>
    </form>
@endsection
