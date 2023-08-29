<x-welcome-layout>
  <a href="{{route('product.browse')}}" class="inline-block text-black ml-4 mt-5 text-xl">
  <a href="/" class="inline-block text-black ml-4 mt-5 text-xl hover:text-blue-800">
    <i class="fa-solid fa-arrow-left"></i> 
    Back
  </a>

  <section class="text-gray-600 body-font overflow-hidden">
      <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
              <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{asset('images/Torres_Escaro2.jpg')}}">
              <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                @if ($product->category_id == 1)
                    <h3 class="text-gray-600 text-xs font-bold tracking-widest title-font mb-1">Traditional Plan</h3>
                @else
                    <h3 class="text-gray-600 text-xs font-bold tracking-widest title-font mb-1">Cremation Plan</h3>
                @endif
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$product->name}}</h1>
            
                <p class="leading-relaxed">{{$product->description}}</p>

                <form action="{{ route('cart.save', $product->id) }}" method="POST">
                  @csrf
                  <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                    <div class="flex">
                        <span class="mr-3">Color</span>
                        <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
                        <button class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                        <button class="border-2 border-gray-300 ml-1 bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
                    </div>
                  <div class="flex ml-6 items-center">
                      <span class="mr-3">Size</span>
                      <div class="relative">
                        <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                          <option>SM</option>
                          <option>M</option>
                          <option>L</option>
                          <option>XL</option>
                        </select>
                        <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6"></path>
                          </svg>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-between">
                    <span class="title-font font-medium text-2xl text-gray-900">&#8369;{{ number_format($product->price, 2, '.', ',') }}</span>
                      <div class="flex justify-end">
                        <button class="flex ml-2 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Add to Cart</button>
                      </div>
                  </div>
                </form>
                
            </div>
          </div>
      </div>
  </section>

</x-welcome-layout>