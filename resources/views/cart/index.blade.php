<x-app-layout>
    <div class="flex flex-col mx-auto max-w-[1240px]">
            <div class="py-4 flex space-x-4">
                <div class="w-2/3">
                    @if (count($items) < 1)
                        <div class="w-full h-[100px] flex justify-center items-center">
                            <p class="text-red-500 text-sm font-medium">You don't have an Item in your cart yet.</p>
                        </div>
                    @endif
                    @foreach ($items as $item)
                        <div class="h-32 flex space-x-4 p-2 rounded-md border border-gray-200 shadow-md mb-2">
                            <img src="{{asset('images/Torres_Escaro2.jpg')}}" alt="" class="w-32 h-full rounded-md">
                            <div class="h-full w-full flex items-center justify-between">
                                <div class="">
                                    <p class="text-gray-600 text-xs font-medium">{{$item->product->category_id}}</p>
                                    <p class="text-xl font-bold">{{$item->product->name}}</p>
                                    <p class="text-sm ">{{substr($item->product->description, 0, 40)}} {{strlen($item->product->description) > 40 ? "..." : ""}}</p>
                                    <p class="text-blue-700 font-bold">&#8369;{{ number_format($item->product->price, 2, '.', ',') }}</p>
                                </div>
            
                                <div class="flex flex-col space-y-1 justify-center items-center">
                                    <p class="font-bold text-lg">Quantity</p>
                                    <div class="flex space-x-2 items-center">
                                        <form action="{{ route('cart.subtract', $item->id) }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <button>
                                                <i class='bx bx-minus text-lg text-gray-400 cursor-pointer hover:text-red-600'></i>
                                            </button>
                                        </form>

                                        <span class="px-2 rounded-md border border-gray-300">{{$item->quantity}}</span>

                                        <form action="{{ route('cart.add', $item->id) }}"  method="POST">
                                            @csrf
                                            @method('put')
                                            <button>
                                                <i class='bx bx-plus text-lg text-gray-400 cursor-pointer hover:text-blue-600'></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <div class="px-4 py-2 hover:bg-gray-200 rounded-md">
                                    <form action="{{route('cart.destroy', $item->id)}}"  method="post">
                                        @csrf
                                        @method('delete')
                                        <button>
                                            <i class='bx bx-trash text-2xl text-red-500 cursor-pointer'></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- <x-checkout-section :items="$items" :total="$total_due" /> --}}

                <div class="w-1/3">
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <div class="w-full h-auto rounded-md shadow-md py-4 px-3 border border-gray-200">
                            <div class="w-full flex justify-between bg-gray-500 p-2 rounded">
                                <p class="text-white font-bold">Name</p>
                                <p class="text-white font-bold">Quantity</p>
                                <p class="text-white font-bold">Price</p>
                            </div>
                            @if (count($items) < 1)
                                <div class="w-full h-[100px] flex justify-center items-center">
                                    <p class="text-red-500 text-sm font-medium">No items yet</p>
                                </div>
                            @endif
                
                            @foreach ($items as $item)
                                <div class="w-full flex justify-between p-2">
                                    <h1 class="w-1/3">{{$item->product->name}}</h1>
                                    <p class="w-1/3 text-center">{{$item->quantity}}</p>
                                    <p class="w-1/3 text-center">&#8369;{{ number_format($item->total_amount, 2, '.', ',') }}</p>
                                </div>

                                <input type="hidden" name="product_ids[]" value="{{$item->product_id}}">
                                <input type="hidden" name="quantities[]" value="{{$item->quantity}}">
                                <input type="hidden" name="unit_prices[]" value="{{$item->total_amount / $item->quantity}}">

                            @endforeach

                            <div class="w-full flex justify-between p-2 border-t border-gray-300">
                                <h1>TOTAL:</h1>
                                <p>&#8369;{{ number_format($total_due, 2, '.', ',') }}</p>
                                <input type="hidden" name="total_due" value="{{$total_due}}"> {{---------------------------------------------------}}
                            </div>
                            <div class="wi-full flex justify-center items-center ">
                                <button type="submit" class="w-full rounded text-white bg-blue-700 px-4 py-2">Place Order</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
    </div>
</x-app-layout>