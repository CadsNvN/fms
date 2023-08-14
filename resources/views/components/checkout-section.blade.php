<div class="w-1/3">
    <div class="w-full h-auto rounded-md shadow-md py-4 px-3 border border-gray-200">
        <form action="">
            @csrf
            <div class="w-full flex justify-between bg-gray-500 p-2 rounded">
                <p class="text-white font-bold">Name</p>
                <p class="text-white font-bold">Quantity</p>
                <p class="text-white font-bold">Price</p>
            </div>
            @if (count($items) == 0)
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
            @endforeach
            <div class="w-full flex justify-between p-2 border-t border-gray-300">
                <h1>TOTAL:</h1>
                <p>&#8369;{{ number_format($total, 2, '.', ',') }}</p>
            </div>
            <div class="wi-full flex justify-center items-center ">
                <button class="w-full rounded text-white bg-blue-700 px-4 py-2">Place Order</button>
            </div>
        </form>
    </div>
</div>