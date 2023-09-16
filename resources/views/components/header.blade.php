<header class="bg-blue-800 py-3">
    <nav class="flex justify-between items-center mx-auto max-w-[1240px]">

        <a href="/" class="text-white flex space-x-2 items-center">
            <img src="{{asset('images/Torreslogo.png')}}" alt="" class="w-12 h-12 rounded-full border border-gray-300">
            <div>
                <h1 class="text-sm font-bold">TORRES ESCARO</h1>
                <p class="text-xs">Funeral Services</p>
            </div>
        </a>

        <div class="flex items-center list-none space-x-4 font-semibold">
            <li class="border-b-2 border-b-blue-800 hover:border-b-white px-3">
              <a href="/" class="text-white" >Home</a>
            </li>
            <li class="border-b-2 border-b-blue-800 hover:border-b-white px-3 ">
              <a href="{{route('product.browse')}}" class="text-white">Products</a>
            </li>
            <li class="border-b-2 border-b-blue-800 hover:border-b-white px-3 ">
              <a href="{{route('about-us')}}" class="text-white">About Us</a>
            </li>
            <li class="border-b-2 border-b-blue-800 hover:border-b-white px-3 ">
              <a href="{{route('contact-us')}}" class="text-white">Contact Us</a>
            </li>
            <li class="border-b-2 border-b-blue-800 hover:border-b-white px-3 ">
              <a href="{{route('news-announcement')}}" class="text-white">News & Announcements</a>
            </li>
        </div>
       <div>
          @if (Route::has('login'))
            <div class="flex space-x-4 items-center">
                @auth
                
                  @if(Auth::user()->role === 'admin')
                      <a href="{{ route('admin.dashboard') }}" class="font-semibold text-gray-600
                      hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline 
                      focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                  @elseif(Auth::user()->role === 'customer')
                      {{-- <a href="{{ route('cart.index') }}" class="rounded px-4 py-2 border border-white text-white font-semibold text-sm" >My Cart</a>  --}}
                      <a href="{{route('cart.index')}}"><box-icon name='cart' type='solid' color='#fdf5f5' ></box-icon></a>
                      {{-- <a href="{{ route('order.index') }}" class="rounded px-4 py-2 border border-white text-white font-semibold text-sm" >My Orders</a>    --}}
                  @endif
         
                  <div class="flex space-x-4">
                    <nav x-data="{ open: false }">
                        <!-- Primary Navigation Menu -->
                        <div class="max-w-7xl mx-auto">
                            <div class="flex justify-between h-16">
                    
                                <!-- Settings Dropdown -->
                                <div class="hidden sm:flex sm:items-center sm:ml-6">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white hover:text-white focus:outline-none transition ease-in-out duration-150">
                                                {{-- <div>{{ Auth::user()->firstName }} {{ Auth::user()->lastName }}</div> --}}
                                                <div>Matt Francia</div>
                    
                                                <div class="ml-1">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>
                    
                                        <x-slot name="content">
                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            <x-dropdown-link :href="route('order.index')">
                                                {{ __('My Orders') }}
                                            </x-dropdown-link>
                    
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                    
                                                <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                    
                                <!-- Hamburger -->
                                <div class="-mr-2 flex items-center sm:hidden">
                                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Responsive Navigation Menu -->
                        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                    
                            <!-- Responsive Settings Options -->
                            <div class="pt-4 pb-1 border-t border-gray-200">
                                <div class="px-4">
                                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                </div>
                    
                                <div class="mt-3 space-y-1">
                                    <x-responsive-nav-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-responsive-nav-link>
                    
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                    
                                        <x-responsive-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="flex items-center justify-center">
                        <img src="{{asset('images/Torres_Escaro2.jpg')}}" alt="" class="w-10 h-10 rounded-full border border-gray-300">
                    </div>  
                </div>
                                      
                  @else
                      <a href="{{ route('login') }}" class="text-sm rounded px-4 py-2 border border-white font-semibold bg-white">LOGIN</a>
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="text-sm rounded px-4 py-2  font-semibold text-white border border-white hover:bg-white hover:text-black ">REGISTER</a>
                  @endif

                @endauth
            </div>
          @endif 
       </div>
    </nav>
</header>