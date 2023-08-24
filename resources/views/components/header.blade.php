<header class="bg-blue-800 py-3">
    <nav class="flex justify-between items-center mx-auto max-w-[1240px]">

        <a href="/" class="text-white flex space-x-2 items-center">
            <img src="{{asset('images/Torres_Escaro2.jpg')}}" alt="" class="w-12 h-12 rounded-full border border-gray-300">
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
              <a href="{{route('about-us')}}" class="text-white">Contact Us</a>
            </li>
            <li class="border-b-2 border-b-blue-800 hover:border-b-white px-3 ">
              <a href="{{route('about-us')}}" class="text-white">News & Announcments</a>
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
                      <a href="{{ route('cart.index') }}" class="rounded px-4 py-2 border border-white text-white font-semibold text-sm" >My Cart</a>  
                      <a href="{{ route('order.index') }}" class="rounded px-4 py-2 border border-white text-white font-semibold text-sm" >My Orders</a>   
                  @endif
                                      
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