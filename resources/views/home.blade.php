@extends('layouts.app')
    
@section('title', 'Login')

@section('content')
    
    

    <!-- hero 0 -->
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
          <a href="{{ route('arena') }}" class="btn btn-primary">Get Started</a>
        </div>
      </div>
    </div>
      <!-- hero -->
    <div class="hero bg-dark-700 min-h-screen">
        <div class="hero-content flex-col lg:flex-row">
          <img
            src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
            class="max-w-sm rounded-lg shadow-2xl" />
          <div>
            <h1 class="text-5xl font-bold">Box Office News!</h1>
            <p class="py-6">
              Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
              quasi. In deleniti eaque aut repudiandae et a id nisi.
            </p>
            <a href="{{ route('arena') }}" class="btn btn-primary">Get Started</a>
          </div>
        </div>
      </div>
      <!-- hero2 -->
      
    <!-- hero xx -->
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
            <button class="btn btn-primary">Get Started</button>
          </div>
        </div>
      </div>
      
     <!-- back to top -->
      <a href="#home"
      class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4"
      id="to-top">
      <span class="block h-5 w-5 rotate-45 border-t-2 border-l-2 mt-2"></span>
  </a>  
  @endsection 
