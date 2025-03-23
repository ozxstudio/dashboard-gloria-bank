
      @extends('layouts.app')
    
@section('title', 'Login')

@section('content')

<div class="hero bg-base-200 min-h-screen">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">Login now!</h1>
      <p class="py-6">
        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
        quasi. In deleniti eaque aut repudiandae et a id nisi.
      </p>
      <a href="{{ route('home') }}" class="btn btn-primary">Back Home</a>  
    <br /> <br /> <br />
<div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
  <div class="card-body">
<form method="POST" action="{{ route('login.post') }}">
  @csrf
  <input type="email" name="email" placeholder="Email" class="input input-bordered w-full mt-4 mb-3" required>
  <input type="password" name="password" placeholder="Password" class="input input-bordered w-full mt-4 mb-3" required>
  <a href="{{ route('password.request') }}" class="link link-hover text-blue-500">Forgot password?</a>
  <div>
    <button type="submit" class="btn btn-primary w-full mt-4">Login</button>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- 

 --> 
@if(session('success'))
    <div class="alert alert-success p-3 bg-green-500 text-white rounded mb-4">
        {{ session('success') }}
    </div>
@endif
<!-- error -->
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







