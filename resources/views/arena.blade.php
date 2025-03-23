@extends('layouts.app')
    
@section('title', 'Login')

@section('content')
<head>
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DaisyUI Test</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    
</head>


   <!-- <h1 class="text-3xl font-bold text-center text-blue-500">-->
      <a href="{{ route('welcome') }}" h1 class="text-3xl font-bold text-center text-blue-500 p-10">
        Hello, DeasyUI!
    </h1></a>
    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content text-center">
          <div class="max-w-md">
            <h1 class="text-5xl font-bold">Hello there</h1>
            <p class="py-6">
              Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
              quasi. In deleniti eaque aut repudiandae et a id nisi.
            </p>
            <a href="{{ route('home') }}" class="btn btn-primary">Back Home</a>
          </div>
        </div>
      </div>
    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
          <img
            src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
            class="max-w-sm rounded-lg shadow-2xl" />
          <div>
            <h1 class="text-5xl font-bold">Box Office News!</h1>
            <p class="py-6">
              Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
              quasi. In deleniti eaque aut repudiandae et a id nisi.
            </p>
            <a href="{{ route('home') }}" class="btn btn-primary">Back Home</a>
          </div>
        </div>
      </div>

      <div
      class="hero min-h-screen"
      style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
      <div class="hero-overlay"></div>
      <div class="hero-content text-neutral-content text-center">
        <div class="max-w-md">
          <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
          <p class="mb-5">
            Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
            quasi. In deleniti eaque aut repudiandae et a id nisi.
          </p>
          <button class="btn btn-primary">Get Started</button>
        </div>
      </div>
    </div>

@endsection
