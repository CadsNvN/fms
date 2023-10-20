<x-welcome-layout>
    <section class="text-gray-600 body-font bg-gray-200 py-6">
        <x-sub-header-text>
            <h1 class="text-4xl font-bold uppercase mb-4">
                Products
            </h1>
        </x-sub-header-text>

        <div>
            <form action=""></form>
        </div>
    
        <div class="container w-full px-5 py-20 mx-auto">
            <div class="flex justify-center flex-wrap w-full gap-4">
                @foreach ($caskets as $casket)
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full rounded border border-gray-200 shadow-lg">
                        <a class="block relative h-48 rounded overflow-hidden">
                            @foreach ($caskets->$images as $image)
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/Torreslogo.png') }}">
                            @endforeach
                        </a>
                        <div class="mt-4">
                            @if ($casket->category_id == 1)
                                <h3 class="text-gray-600 text-xs font-bold tracking-widest title-font mb-1">Memorial Services</h3>
                            @else
                                <h3 class="text-gray-600 text-xs font-bold tracking-widest title-font mb-1">Direct Cremation Services</h3>
                            @endif
                            <h2 class="text-gray-900 title-font text-lg font-medium">{{$casket->name}}</h2> 
                            <h2 class="text-gray-900 title-font text-sm font-medium">{{substr($casket->description, 0, 50)}} {{strlen($casket->description) > 50 ? "..." : ""}}</h2> 
                        </div>
                        <div class="mt-2 flex w-full justify-between">
                            <p class="mt-1 text-base text-black font-semibold">&#8369;{{ number_format($casket->price, 2, '.', ',') }}</p>
                            <a href="/show/{{$casket->id}}" type="submit" class="px-4 py-2 rounded text-black hover:text-white hover:bg-blue-700 bg-gray-300 font-medium text-sm">See More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-welcome-layout>