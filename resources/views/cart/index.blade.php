<x-app-layout>
    <div class="flex flex-col mx-auto max-w-[1240px]">
        <div class="py-4">
            <div class="w-2/3">
                @foreach ($items as $item)
                    <div class="h-32 flex space-x-4 p-2 rounded-md border border-gray-200 shadow-md">
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
                                    <form action="{{ route('quantity.subtract', $item->id) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <button>
                                            <i class='bx bx-minus text-lg text-gray-400 cursor-pointer hover:text-red-600'></i>
                                        </button>
                                    </form>

                                    <span class="px-2 rounded-md border border-gray-300">{{$item->quantity}}</span>

                                    <form action="{{ route('quantity.add', $item->id) }}"  method="POST">
                                        @csrf
                                        @method('put')
                                        <button>
                                            <i class='bx bx-plus text-lg text-gray-400 cursor-pointer hover:text-blue-600'></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="px-4 py-2 hover:bg-gray-200 rounded-md">
                                <i class='bx bx-trash text-2xl text-red-500 cursor-pointer'></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

    
            <div>
            </div>
        </div>
    </div>
</x-app-layout>