@extends('layouts.app')

@section('title', 'Forgot Password')

@section('content')
<div class="max-w-md mx-auto p-6 bg-white shadow-md rounded-md">
    <h2 class="text-xl font-bold mb-4">Forgot Password</h2>
    <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
        <div class="card-body">
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <input type="email" name="email" placeholder="Enter your email" class="input input-bordered mt-4 mb-3" required>
        <button type="submit" class="btn btn-primary mt-4">Send Password Reset Link</button>
    </form>
</div>
</div>
</div>
@endsection
