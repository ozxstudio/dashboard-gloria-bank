@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
<div class="max-w-md mx-auto p-6 bg-white shadow-md rounded-md">
    <h2 class="text-xl font-bold mb-4">Reset Password</h2>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="email" name="email" placeholder="Email" class="input input-bordered w-full mb-3" required>
        <input type="password" name="password" placeholder="New Password" class="input input-bordered w-full mb-3" required>
        <input type="password" name="password_confirmation" placeholder="Confirm New Password" class="input input-bordered w-full mb-3" required>
        <button type="submit" class="btn btn-primary w-full">Reset Password</button>
    </form>
</div>
@endsection
