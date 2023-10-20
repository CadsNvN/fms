<x-welcome-layout>
  <a href="{{route('product.browse')}}" class="inline-block text-black ml-4 mt-5 text-xl hover:text-blue-800">
    <i class="fa-solid fa-arrow-left"></i> 
    Back
  </a>

  <section class="text-gray-600 body-font overflow-hidden">
      <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
              <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/Torreslogo.png') }}">
              <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                @if ($product->category_id == 1)
                    <h3 class="text-gray-600 text-xs font-bold tracking-widest title-font mb-1">Memorial services</h3>
                @else
                    <h3 class="text-gray-600 text-xs font-bold tracking-widest title-font mb-1">Burial Services</h3>
                @endif
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$product->name}}</h1>
            
                <p class="leading-relaxed">{{$product->description}}</p>

                <form action="{{ route('cart.save', $product->id) }}" method="POST">
                  @csrf
                 
                  <div class="text-justify">
                    <h1 class="uppercase font-bold text-2xl mt-3">Package Inclusion</h1>
                    
                    <ul>
                      <li>Retrieval of Remains</li>
                      <li>Embalming</li>
                      <li>Viewing Equipment</li>
                      <li>Flower </li>
                      <li>Hearse for Interment</li>
                      <li>Hot & Cold - Water Dispenser</li>
                      <li>Facilatation of Death Certificates and Permits c/o</li>
                    </ul>
                  </div>

                  <div class="flex justify-between mt-3">
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