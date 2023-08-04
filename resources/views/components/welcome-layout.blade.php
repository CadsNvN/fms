<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <title>Torres Escaro Funeral Services</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="mx-auto">
            <nav class="flex justify-between items-center bg-blue-900">
                <div class="py-5 font-bold text-3xl ms-5">
                    <a href="/">
                        <span class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">FMS</span>
                    </a>
                </div>

                <div class="flex items-center text-lg list-none space-x-9 font-semibold">
                    <li><a href="" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a></li>
                    <li><a href="" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Products</a></li>
                    <li><a href="" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">About Us</a></li>
                    <li><a href="" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">News & Update</a></li>
                    <li><a href="" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Testimonial</a></li>
                    <li><a href="" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">My Cart<sup>0</sup></a></li>
                </div>
               <div>
                    @if (Route::has('login'))
                    <div class=" sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ route('admin.dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif 
               </div>
            </nav>
        </header>

            <main>
                {{$slot}}
            </main>

            <footer class="text-gray-600 body-font bg-gray-200">
                <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                  <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                      </svg>
                      <span class="ml-3 text-xl">Tailblocks</span>
                    </a>
                    <p class="mt-2 text-sm text-gray-500">Air plant banjo lyft occupy retro adaptogen indego</p>
                  </div>
                  <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                      <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                      <nav class="list-none mb-10">
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                      </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                      <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                      <nav class="list-none mb-10">
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                      </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                      <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                      <nav class="list-none mb-10">
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                      </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                      <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                      <nav class="list-none mb-10">
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                          <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="bg-gray-100">
                  <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                    <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
                      <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@knyttneve</a>
                    </p>
                    <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                      <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                      </a>
                      <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                        </svg>
                      </a>
                      <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                      </a>
                      <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                          <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                      </a>
                    </span>
                  </div>
                </div>
              </footer>
    </body>
</html>


