@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-4xl mx-auto p-10 mb-10 mt-10 bg-white shadow-md rounded-md">
    <h2 class="text-xl font-bold mb-4">Welcome to Dashboard!</h2>
    <p>You are logged in.</p>
  <!--  <a href="{{ route('logout') }}" class="btn btn-danger mt-4">Logout</a> -->
</div>
<!-- -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger mt-4 mb-3">Logout</button>
</form>


@endsection
