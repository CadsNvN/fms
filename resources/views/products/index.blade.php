<x-app-layout>
    <section class="py-4">
        <div class="flex flex-col mx-auto max-w-[1240px]">
            <div class="py-2 border-b border-gray-300">
                <h1 class="text-xl font-bold">Your Products</h1>
            </div>
    
            <div>
                <table class="table-auto w-full border-collapse">
                    <thead>
                        <tr class="text-left bg-gray-200">
                            <th class="px-4 py-2">Image</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Price</th>
                            <th class="px-4 py-2">Availability</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="border-t border-gray-300">
                                <td class="px-4 py-2">
                                    <img src="{{asset('images/Torres_Escaro2.jpg')}}" alt="Product Image" class="w-16 h-16">
                                </td>
                                <td class="px-4 py-2 text-sm">{{$product->name}}</td>
                                <td class="px-4 py-2 text-sm">{{substr($product->description, 0, 3)}} {{strlen($product->description) > 5 ? "..." : ""}}</td>
                                <td class="px-4 py-2 text-sm">&#8369;{{ number_format($product->price, 2, '.', ',') }}</td>
                                <td class="px-4 py-2 text-sm">
                                    @if ($product->is_available == true)
                                        <span class="rounded py-1 px-2 text-xs text-white bg-green-600">available</span>
                                    @else
                                        <span class="rounded py-1 px-2 text-xs text-white bg-red-600">unavailable</span>
                                    @endif
                                </td>
                                <td class="px-4 py-2 text-sm flex items-center space-x-2">
                                    <a href="/product/{{$product->id}}/edit" class="rounded py-1 px-2 cursor-pointer">
                                        <i class='bx bxs-edit text-xl text-blue-600' ></i>
                                    </a>                                           
                                    <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded p-2 cursor-pointer">
                                            <i class='bx bx-trash text-xl text-red-600'></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3 pt-2 border-t border-gray-200">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
    