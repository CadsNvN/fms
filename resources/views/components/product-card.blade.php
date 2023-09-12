<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
    <a class="block relative h-48 rounded overflow-hidden">
      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/Torreslogo.png') }}">
    </a>
    <div class="mt-4">
      <h3 class="text-gray-500 text-lg tracking-widest title-font mb-1">{{$product->name}}</h3>
      <h2 class="text-gray-900 title-font text-lg font-medium">{{$product->category_id}}</h2> 
      <h2 class="text-gray-900 title-font text-lg font-medium">{{$product->description}}</h2> 
      <p class="mt-1 text-lg">&#8369;{{ number_format($product->price, 2, '.', ',') }}</p>
    </div>
    <div class="mt-6 flex w-full justify-end">
      <a href="/show/{{$product->id}}" type="submit" class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-700">See More</a>
    </div>
  </div>