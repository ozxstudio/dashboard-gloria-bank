<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="navbar flex justify-between bg-black text-white shadow-sm px-10">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
            </div>
            <ul
              tabindex="0"
              class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
              <li><a>Item 1</a></li>
              <li>
                <a>Parent</a>
                <ul class="p-2">
                  <li><a>Submenu 1</a></li>
                  <li><a>Submenu 2</a></li>
                </ul>
              </li>
              <li><a>Item 3</a></li>
            </ul>
          </div>
          <a href="{{ route('welcome') }}" class="btn btn-ghost text-xl">DeasyUI</a>
        </div>
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal px-1">
            <li><a class="text-white btn btn-ghost">Item 1</a></li>
            
                <li> 
              <details>
                <summary a class="text-white btn btn-ghost hover-black py-2">Parent</summary>
                <ul class="p-2">
                  
                  <li><a href="{{ route('login') }}" a class="text-black btn btn-ghost">Login</a></li>
                  <li><a href="{{ route('register') }}" a class="text-black btn btn-ghost">Register</a></li>
                </ul>
              </details>
            </li>
            <li><a class="text-white btn btn-ghost">Item 3</a></li>
          </ul>
        </div>
        <div class="navbar-end">
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        </div>
      </div>
    
    <ul class="menu menu-horizontal bg-base-200 rounded-box mt-6 p-10">
        <li>
          <a class="tooltip" a href="{{ route('home') }}" data-tip="Home">
            
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
          </a>
        </li>
        <li>
          <a class="tooltip" a href="{{ route('login') }}" data-tip="Details">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </a>
        </li>
        <li>
          <a class="tooltip" a href="{{ route('register') }}" data-tip="Stats">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
          </a>
        </li>
      </ul>
 <!--   <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('login') }}">Login</a> |
        <a href="{{ route('register') }}">Register</a>
    </nav>-->

    <div class="container">
        @yield('content')
    </div>
 <!-- footer -->

     <!-- <footer class="footer sm:footer-horizontal bg-base-200 text-base-content p-10"> -->
        <footer class="flex flex-wrap justify-between items-center bg-black text-white p-10">

            <nav class="flex flex-col">
              <h6 class="footer-title">Services</h6>
              <a class="link link-hover">Branding</a>
              <a class="link link-hover">Design</a>
              <a class="link link-hover">Marketing</a>
              <a class="link link-hover">Advertisement</a>
            </nav>
            <nav class="flex flex-col">
              <h6 class="footer-title">Company</h6>
              <a class="link link-hover">About us</a>
              <a class="link link-hover">Contact</a>
              <a class="link link-hover">Jobs</a>
              <a class="link link-hover">Press kit</a>
            </nav>
            <nav class="flex flex-col">
              <h6 class="footer-title">Legal</h6>
              <a class="link link-hover">Terms of use</a>
              <a class="link link-hover">Privacy policy</a>
              <a class="link link-hover">Cookie policy</a>
            </nav>
          </footer>
        <!--  <footer class="footer bg-base-200 text-base-content border-base-300 border-t px-10 py-4"> -->
            <footer class="flex flex-wrap justify-between items-center bg-black text-white px-10 py-10">
            <aside class="grid-flow-col items-center">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd"
                clip-rule="evenodd"
                class="fill-current">
                <path
                  d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
              </svg>
              <p>
                ACME Industries Ltd.
                <br />
                Providing reliable tech since 1992
              </p>
            </aside>
    
              <!-- form subscribe -->
              <form>
                <h6 class="footer-title">Newsletter</h6>
                <fieldset class="w-full md:w-auto">
                  <label>Enter your email address</label>
                  <div class="join flex-nowrap flex">
                    <input
                      type="text"
                      placeholder="username@site.com"
                      class="input input-bordered join-item" />
                    <button class="btn btn-primary join-item">Subscribe</button>
                  </div>
                </fieldset>
              </form>
            
            <nav class="md:place-self-center md:justify-self-end">
              <div class="grid grid-flow-col gap-4">
                <a>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="fill-current">
                    <path
                      d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                  </svg>
                </a>
                <a>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="fill-current">
                    <path
                      d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                  </svg>
                </a>
                <a>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="fill-current">
                    <path
                      d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                  </svg>
                </a>
              </div>
            </nav>
          </footer>
</body>
</html>
