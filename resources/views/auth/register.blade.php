@extends('layouts.app')

@section('title', 'Register')

@section('content')
<br /><br /><br />
@if($errors->any())
    <div class="alert alert-danger p-3 bg-red-500 text-white rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="text-center lg:text-left">
        <h1 class="text-5xl font-bold">Signup now!</h1>
        <p class="py-6">
          Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
          quasi. In deleniti eaque aut repudiandae et a id nisi.
        </p>
    <h2 class="text-xl font-bold mb-4">Register</h2>
    <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
        <div class="card-body">
   
    <form method="POST" action="{{ route('register.post') }}">
        @csrf
        <input type="text" name="name" placeholder="Full Name" class="input input-bordered w-full mt-4 mb-3" required>
        <input type="email" name="email" placeholder="Email" class="input input-bordered w-full mt-4 mb-3" required>
        <input type="password" name="password" placeholder="Password" class="input input-bordered w-full  mt-4 mb-3" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="input input-bordered w-full mt-4 mb-3" required>
        <button type="submit" class="btn btn-primary w-full mt-4">Register</button>
    </form>
    
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- register 2 -->
<br /><br /><br />
{{ csrf_field() }}



<!-- error fill -->
@if($errors->any())
    <div class="alert alert-danger p-3 bg-red-500 text-white rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
